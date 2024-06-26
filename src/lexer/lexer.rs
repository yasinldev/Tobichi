use super::tokens::{IdentKind, Tokens, LiteralKind, Token, TokenKind, Value};
use logos::Logos;

pub fn get_token_stream(raw_code: &String) -> Vec<Token> {
    let mut token_stream: Vec<Token> = Vec::new();
    let mut lex = Tokens::lexer(raw_code);

    loop {
        let lex_token = lex.next();
        let (kind, value) = match lex_token {
            Some(Tokens::Number(val)) => (
                TokenKind::Literal(LiteralKind::Number),
                Some(Value::Number(val))
            ),

            Some(Tokens::Boolean(val)) => (
                TokenKind::Literal(LiteralKind::Boolean),
                Some(Value::Boolean(val))
            ),

            Some(Tokens::String(val)) => {
                let str_literal = val.trim_matches('"');
                (
                    TokenKind::Literal(LiteralKind::String),
                    Some(Value::String(str_literal))
                )
            }

            Some(Tokens::Identifier(val)) => (
                TokenKind::Ident(IdentKind::Var),
                Some(Value::String(val)),
            ),

            Some(Tokens::OpenParen) => (TokenKind::OpenParen, None),
            Some(Tokens::CloseParen) => (TokenKind::CloseParen, None),
            Some(Tokens::Plus) => (TokenKind::Plus, None),
            Some(Tokens::Minus) => (TokenKind::Minus, None),
            Some(Tokens::Star) => (TokenKind::Star, None),
            Some(Tokens::Slash) => (TokenKind::Slash, None),
            Some(Tokens::Assign) => (TokenKind::Assign, None),
            Some(Tokens::Greater) => (TokenKind::Greater, None),
            Some(Tokens::Less) => (TokenKind::Less, None),
            Some(Tokens::ThreeDot) => (TokenKind::ThreeDot, None),
            Some(Tokens::Semicolon) => (TokenKind::Semicolon, None),
            Some(Tokens::Var) => (TokenKind::Ident(IdentKind::Var), None),
            Some(Tokens::While) => (TokenKind::Ident(IdentKind::While), None),
            Some(Tokens::If) => (TokenKind::Ident(IdentKind::If), None),
            Some(Tokens::Else) => (TokenKind::Ident(IdentKind::Else), None),
            Some(Tokens::Whitespace) => continue,
            Some(Tokens::Error) => continue,
            None => break
        };

        token_stream.push(Token { kind, value });
    }

    token_stream
}