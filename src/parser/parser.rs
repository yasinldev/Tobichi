use crate::lexer::tokens::{Ident, IdentKind, Token, TokenKind, Value};
use crate::parser::parser::Expr::Builtin;

#[derive(Debug, PartialEq, Clone)]
pub enum Expr<'a> {
    Constant(Value<'a>),
    Builtin(Ident<'a>),
    CallParams(Box<Expr<'a>>, Vec<Expr<'a>>),
    While {
        condition: Box<Expr<'a>>,
        body: Vec<Expr<'a>>
    }
}

pub fn generate_expr_tree(token_stream: Vec<Token>) -> Vec<Expr> {
    let mut expr_tree = Vec::new();
    let mut token_iter = token_stream.into_iter().peekable();

    while let Some(token) = token_iter.next() {
        match token.kind {
            TokenKind::Literal(ref literal_kind) => {
                if let Some(value) = token.value {
                    expr_tree.push(Expr::Constant(value));
                } else {
                    println!("Unexpected Token: {:?}", token);
                }
            },
            TokenKind::Ident(ref ident_kind) => {
                if let Some(value) = token.value {
                    expr_tree.push(
                        Builtin(Ident {
                            kind: IdentKind::Var,
                            value: Some(value),
                        })
                    )
                } else {
                    println!("Unexpected token: {:?}", token);
                }
            },
            TokenKind::While => {
                if let Some(condition_expr) = parse_expr(&mut token_iter) {
                    let mut body = Vec::new();
                    while let Some(next_token) = token_iter.peek().cloned() {
                        if next_token.kind == TokenKind::CloseBrace {
                            token_iter.next();
                            break;
                        } else {
                            if let Some(body_expr) = parse_expr(&mut token_iter) {
                                body.push(body_expr);
                            } else {
                                panic!("Unexpected token: {:?}", next_token);
                            }
                        }
                    }
                    expr_tree.push(Expr::While {
                        condition: Box::new(condition_expr),
                        body,
                    });
                } else {
                    println!("Unexpected token: {:?}", token);
                }
            }
            _ => {
                println!("Raw token: {:?}", token)
            }
        }
    }
    expr_tree
}

fn parse_expr<'a, I>(token_iter: &mut std::iter::Peekable<I>) -> Option<Expr<'a>>
    where I: Iterator<Item = Token<'a>> {
    if let Some(token) = token_iter.next() {
        println!("Token: {:?}", token.kind);
        match token.kind {
            TokenKind::Literal(ref literal_kind) => {
                if let Some(value) = token.value {
                    Some(Expr::Constant(value))
                } else {
                    panic!("Unexpected token: {:?}", token);
                }
            },
            TokenKind::Ident(ref ident_kind) => {
                if let Some(value) = token.value {
                    Some(Builtin(Ident {
                        kind: IdentKind::Var,
                        value: Some(value)
                    }))
                } else {
                    panic!("Unexpected token: {:?}", token);
                }
            },
            TokenKind::OpenParen => {
                if let Some(expr) = parse_expr(token_iter) {
                    let mut params = Vec::new();
                    while let Some(next_token) = token_iter.peek().cloned() {
                        if next_token.kind == TokenKind::CloseParen {
                            token_iter.next();
                            break;
                        } else {
                            let param_expr = parse_expr(token_iter);
                            if let Some(param_expr) = param_expr {
                                params.push(param_expr);
                            } else {
                                panic!("Unexpected token: {:?}", next_token);
                            }
                        }
                    }
                    Some(Expr::CallParams(Box::new(expr), params))
                } else {
                    panic!("Unexpected token: {:?}", token);
                }
            }
            _ => {
                println!("Raw Token: {:?}", token);
                None
            }
        }
    } else {
        None
    }
}