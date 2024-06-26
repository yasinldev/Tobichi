mod lexer;
use lexer::lexer::get_token_stream;

fn main() {
    let raw_code = String::from(r#"
        var x = 42;
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
