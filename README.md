# Tobichi Programming Language

Modern typed and compiled programming language. Using LLVM technology, it offers the benefits of modern compiler optimizations and the ability to target multiple architectures. The language design emphasizes performance and low-level access, while also incorporating features for safer memory management and more expressive syntax compared to its predecessors.

## Lexer

Lexer supports a variety of tokens, if you want to browse the supported token types you can go [here](src/lexer/tokens.rs). Below is an example of a working lexer, the system is designed to be as simple as possible.
Here is an example of how to use the lexer.

```rs
mod lexer;

#[cfg(test)]
mod tests {
    use super::lexer::tokens::tokenize;
    use super::lexer::tokens::Tokens::*;
    
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
        println!("{:#?}", tokens);
    }
}
```

The output of the above code should be as follows

```
[
    Let,
    Ident(
        "degisken1",
    ),
    Operator(
        "=",
    ),
    Number(
        1234.0,
    ),
    In,
    If,
    Ident(
        "x",
    ),
    Operator(
        "=",
    ),
]
...
```

## Parser
Even if there are minor problems in the parser, it can be used experimentally as it is. The parser processes the lexed code and generates an expression tree as output

Here is an example of how to use the parser.
```rs
mod lexer;
mod ast;

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
```

The output of the above code should be as follows

```
Success ASTNode: [
    FunctionsNode(
        Functions {
            prototype: Prototype {
                name: "",
                fn_type: Normal,
                args: [],
            },
            body: VarExpr {
                vars: [
                    (
                        "degisken1",
                        LiteralExpr(
                            1234.0,
                        ),
                    ),
                ],
                body_expr: ConditionalExpr {
                    cond_expr: BinaryExpr(
                        "=",
                        VariableExpr(
                            "x",
                        ),
                        LiteralExpr(
                            5.0,
                        ),
...
```
Expression tree is a tree structure that represents the code in a more readable way. This tree structure is used to generate the LLVM IR code.

## Codegen

This part still under development please follow the src/codegen folder.

## Setup Development Environment
* LLVM version 10.0 (https://llvm.org)
* Latest stable version of Rust (https://www.rust-lang.org/tools/install)

## Contributing
Contributions are always welcome! If you have any suggestions or would like to contribute to the project, please open an issue on GitHub. You can also fork the repository and submit a pull request.