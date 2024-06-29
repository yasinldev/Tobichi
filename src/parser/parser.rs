use crate::lexer::tokens::{Ident, IdentKind, Token, TokenKind, Value};
use crate::parser::parser::Expr::{Builtin};

#[derive(Debug, PartialEq, Clone)]
pub enum Expr<'a> {
    Constant(Value<'a>),
    Builtin(Ident<'a>),
    CallParams(Box<Expr<'a>>, Vec<Expr<'a>>),
    While {
        condition: Box<Expr<'a>>,
        body: Vec<Expr<'a>>
    },
    Assign {
        a_type: Ident<'a>,
        mutable: bool,
        value: Box<Expr<'a>>,
    },
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
                    panic!("Unexpected Token: {:?}", token);
                }
            },
            TokenKind::Ident(ref ident_kind) => {
                if let Some(value) = token.value {
                    expr_tree.push(
                        Builtin(Ident {
                            kind: IdentKind::Identifier,
                            value: Some(value),
                        })
                    )
                } else {
                    panic!("Unexpected token: {:?}", token);
                }
            },
            TokenKind::Var => {
                let mutable = if let Some(Token { kind: TokenKind::Mutable, .. }) = token_iter.peek() {
                    token_iter.next();
                    true
                } else {
                    false
                };
                if let Some(Token { kind: TokenKind::Ident(_), value: Some(var_name) }) = token_iter.next() {
                    if let Some(Token { kind: TokenKind::Assign, .. }) = token_iter.next() {
                        if let Some(value_expr) = parse_expr(&mut token_iter) {
                            expr_tree.push(Expr::Assign {
                                a_type: Ident {
                                    kind: IdentKind::Var,
                                    value: Some(var_name),
                                },
                                mutable,
                                value: Box::new(value_expr),
                            });
                        } else {
                            panic!("Unexpected token in expression: {:?}", token_iter.next());
                        }
                    } else {
                        panic!("Expected '=' after variable name, found: {:?}", token_iter.peek());
                    }
                } else {
                    panic!("Unexpected token after 'var', expected identifier: {:?}", token_iter.next());
                }
            }
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
                    panic!("Unexpected token: {:?}", token);
                }
            }
            _ => {
                println!("Raw token: {:?}", token)
            }
        }
    }
    expr_tree
}

fn parse_expr<'a, I>(token_iter: &mut std::iter::Peekable<I>) -> Option<Expr<'a>> where I: Iterator<Item = Token<'a>> {
    if let Some(token) = token_iter.next() {
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