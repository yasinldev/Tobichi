# Tobichi Programming Language

C-like was developed as a typed and compiled programming language. Using LLVM technology, it offers the benefits of modern compiler optimizations and the ability to target multiple architectures. The language design emphasizes performance and low-level access, while also incorporating features for safer memory management and more expressive syntax compared to its predecessors.

## Lexer

Lexer supports a variety of tokens, if you want to browse the supported token types you can go [here](src/lexer/tokens.rs). Below is an example of a working lexer, the system is designed to be as simple as possible.
Here is an example of how to use the lexer.

```rs
mod lexer;
use lexer::lexer::get_token_stream;

fn main() {
    let raw_code = String::from(r#"
        var x: u8 = 42;
        while (x > 0) {
            x = x - 1;
        }
        if (x == 0) {
            print("Done!");
        } else {
            print("Error!");
        }
    "#);

    let tokens = get_token_stream(&raw_code);

    for token in tokens {
        println!("{:?}", token);
    }
}
```

The output of the above code should be as follows

```
Token { kind: Ident(Var), value: None }
Token { kind: Ident(Var), value: Some(String("x")) }
Token { kind: ThreeDot, value: None }
Token { kind: Ident(Var), value: Some(String("u8")) }
Token { kind: Assign, value: None }
Token { kind: Literal(Number), value: Some(Number(42.0)) }
Token { kind: Ident(While), value: None }
Token { kind: OpenParen, value: None }
Token { kind: Ident(Var), value: Some(String("x")) }
Token { kind: Greater, value: None }
...
```

## Parser
Even if there are minor problems in the parser, it can be used experimentally as it is. The parser processes the lexed code and generates an expression tree as output

Here is an example of how to use the parser.
```rs
mod lexer;
mod parser;
use lexer::lexer::get_token_stream;
use parser::parser::generate_expr_tree;

fn main() {
    let raw_code = String::from(r#"
        var mut x = "Hello World!";
    "#);

    let tokens = get_token_stream(&raw_code);
    let mut lexed_vars = Vec::new();

    for token in tokens {
        lexed_vars.push(token);
    }

    //println!("Lexed Variables: {:#?}", lexed_vars);

    let expr_tree = generate_expr_tree(lexed_vars);
    println!("Expression Tree: {:#?}", expr_tree);
}
```

The output of the above code should be as follows

```
Expression Tree: [
    Assign {
        a_type: Ident {
            kind: Var,
            value: Some(
                String(
                    "x",
                ),
            ),
        },
        mutable: true,
        value: Constant(
            String(
                "Hello World!",
            ),
        ),
    },
]
```
Expression tree is a tree structure that represents the code in a more readable way. This tree structure is used to generate the LLVM IR code.

Below is the expression tree version of the above code.

![img.png](public/img_1.png)
## Setup Development Environment
* LLVM version 10.0 (https://llvm.org)
* Latest stable version of Rust (https://www.rust-lang.org/tools/install)

## Contributing
Contributions are always welcome! If you have any suggestions or would like to contribute to the project, please open an issue on GitHub. You can also fork the repository and submit a pull request.
