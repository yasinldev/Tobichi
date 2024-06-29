mod lexer;
mod parser;
use lexer::lexer::get_token_stream;
use parser::parser::generate_expr_tree;

fn main() {
    let raw_code = String::from(r#"
        var x = "Hello World!";
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
