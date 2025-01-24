#![recursion_limit = "256"]

mod lexer;
mod ast;
mod codegen;

#[cfg(test)]
mod tests {
    use super::lexer::tokens::tokenize;
    use super::lexer::tokens::Tokens::*;
    use super::ast::ast::{default_parser_settings, parse, ASTNode};
    
    #[test]
    fn test_tokenize() {
        let input = r#"
            let degisken1 = 1234 in
            if x = 5 then y = 10 else y = 20

            function ornek_fonksiyon(x, y)
                x + y;

            ornek_fonksiyon(12,43);
        "#;

        let tokens = tokenize(input);
        let parsed_tree = Vec::<ASTNode>::new();
        let settings = &mut default_parser_settings();

        match parse(&tokens, &parsed_tree, settings) {
            Ok((ast, next_token)) => {
                println!("Success ASTNode: {:#?}", ast);
                println!("Remaining tokens: {:?}", next_token);
            },
            Err(err_message) => {
                eprintln!("Error: {}", err_message);
            }
        }
    }
}
