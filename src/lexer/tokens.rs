use logos::Logos;

#[derive(Debug, PartialEq, Logos)]
pub enum Tokens<'a> {
    #[token("(")]
    OpenParen,
    #[token(")")]
    CloseParen,
    #[token("+")]
    Plus,
    #[token("-")]
    Minus,
    #[token("*")]
    Star,
    #[token("/")]
    Slash,
    #[token("=")]
    Assign,
    #[token(">")]
    Greater,
    #[token(";")]
    Semicolon,
    #[token("<")]
    Less,
    #[token(":")]
    ThreeDot,
    #[regex("-?([0-9])+", |lex| lex.slice().parse())]
    Number(f64),
    #[token("var")]
    Var,
    #[token("while")]
    While,
    #[token("if")]
    If,
    #[token("else")]
    Else,
    #[regex("[a-zA-Z]+")]
    Identifier(&'a str),
    #[regex("\"([^\"\\\\]|\\\\.)*\"")]
    String(&'a str),
    #[regex("(true|false)", |lex| lex.slice().parse())]
    Boolean(bool),
    #[regex(r"[ \t\n\f]+", logos::skip)]
    Whitespace,
    #[error]
    Error,
}

#[derive(Debug, PartialEq, Clone)]
pub enum TokenKind {
    ThreeDot,
    Semicolon,
    OpenParen,
    CloseParen,
    Plus,
    Minus,
    Star,
    Slash,
    Assign,
    Greater,
    Less,
    Var,
    While,
    If,
    Else,
    Ident(IdentKind),
    Literal(LiteralKind),
}

#[derive(Debug, PartialEq, Clone)]
pub enum LiteralKind {
    Number,
    String,
    Boolean
}

#[derive(Debug, PartialEq, Clone)]
pub enum Value<'a> {
    Number(f64),
    String(&'a str),
    Boolean(bool),
}

#[derive(Debug, PartialEq, Clone)]
pub enum IdentKind {
    Var,
    Plus,
    Minus,
    ThreeDot,
    Semicolon,
    Star,
    Slash,
    Assign,
    Greater,
    Less,
    While,
    If,
    Else,
}

#[derive(Debug, PartialEq, Clone)]
pub struct Ident<'a> {
    pub kind: IdentKind,
    pub value: Option<Value<'a>>
}

impl<'a> Ident<'a> {
    pub fn built_in(&'a self) -> bool {
        match self.kind {
            IdentKind::Var
            | IdentKind::Assign
            | IdentKind::Plus
            | IdentKind::Minus
            | IdentKind::Slash
            | IdentKind::Greater
            | IdentKind::ThreeDot
            | IdentKind::Less
            | IdentKind::While
            | IdentKind::If
            | IdentKind::Else
            => true,
            _ => false
        }
    }
}

#[derive(Debug, Clone, PartialEq)]
pub struct Token<'a> {
    pub kind: TokenKind,
    pub value: Option<Value<'a>>,
}