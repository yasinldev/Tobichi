#[derive(PartialEq, Clone, Debug)]
pub enum Tokens {
    Function,
    Extern,
    If,
    Then,
    Else,
    For,
    In,
    Let,
    Binary,
    Unary,
    Delimiter,
    OpeningParenthesis,
    ClosingParenthesis,
    OpeningBrackets,
    ClosingBrackets,
    Comma,
    Ident(String),
    Number(f64),
    Operator(String)
}

pub use self::Tokens::{
    Function,
    Extern,
    If,
    Then,
    Else,
    For,
    In,
    Let,
    Binary,
    Unary,
    Delimiter,
    OpeningParenthesis,
    ClosingParenthesis,
    OpeningBrackets,
    ClosingBrackets,
    Comma,
    Ident,
    Number,
    Operator
};

pub fn tokenize(input: &str) -> Vec<Tokens> {
    let comment_re = regex::Regex::new(r"//[^\n]*|/\*[^*]*\*+(?:[^/*][^*]*\*+)*/").unwrap();
    let preprocessed = comment_re.replace_all(input, "");

    let tokens = regex::Regex::new(concat!(
        r"(?P<ident>\p{Alphabetic}\w*)|",
        r"(?P<number>\d+\.?\d*)|",
        r"(?P<delimiter>;)|",
        r"(?P<oppar>\()|",
        r"(?P<clpar>\))|",
        r"(?P<obrack>\{)|",
        r"(?P<cbrack>\})|",
        r"(?P<comma>,)|",
        r"(?P<operator>\S)",
    )).unwrap();

    let mut lexed_input = Vec::new();

    for capture in tokens.captures_iter(&preprocessed) {
        let token = if let Some(ident) = capture.name("ident") {
            match ident.as_str() {
                "function" => Function,
                "extern" => Extern,
                "if" => If,
                "then" => Then,
                "else" => Else,
                "for" => For,
                "in" => In,
                "let" => Let,
                "binary" => Binary,
                "unary" => Unary,
                ident => Ident(ident.to_string())
            }
        } else if let Some(number) = capture.name("number") {
            match number.as_str().parse() {
                Ok(num) => Number(num),
                Err(_) => panic!("Error: An error occurred while parsing the number")
            }
        } 
        else if capture.name("delimiter").is_some() { Delimiter }
        else if capture.name("oppar").is_some() { OpeningParenthesis }
        else if capture.name("clpar").is_some() { ClosingParenthesis }
        else if capture.name("obrack").is_some() { OpeningBrackets }
        else if capture.name("cbrack").is_some() { ClosingBrackets }
        else if capture.name("comma").is_some() { Comma }
        else if let Some(op) = capture.name("operator") { Operator(op.as_str().to_string()) }
        else { panic!("Error: Unknown token detected") };

        lexed_input.push(token);
    }

    lexed_input
}