# Lexer

This is the lexer for the compiler. It is responsible for converting the source code into a list of tokens.

A token is a tuple of the form `(token_type, token_value)`. The token type is an integer that represents the type of the token. The token value is the actual value of the token. For example, the token type for an integer literal is `T_INT` and the token value is the integer value of the literal.

The lexer is implemented as a namespace. The lexer namespace contains the following functions:

- `Compiler\Lexer\Lexer`: The lexer constructor. It takes the source code as a string and returns a lexer object.
- `Compiler\Lexer\Token`: The token constructor. It takes the token type and token value and returns a token object.
- `Compiler\Lexer\TokenTypes`: A list of all the token types.

The lexer object contains the following this public functions:

- `Lexer (constructor)`: The lexer constructor. It takes the source code as a string and returns a lexer object.
- `Lexer->getNextToken()`: Returns the next token in the source code.
- `Lexer->peek()`: Returns the next token in the source code without consuming it.
- `Lexer->getPosition()`: Returns the current position in the source code.
- `Lexer->tokenize()`: Returns a list of all the tokens in the source code.
- `TokenTypes->getValues()`: Returns values of all the token types.
- `Token (constructor)`: The token constructor. It takes the token type and token value and returns a token object.

## Token Types

The lexer supports the following token types please see the [token types](TokenTypes.php) file for more information.

## Example

The following example shows how to use the lexer:

```php
<?php

$input = '
    fn example_fn((int)variable_1, (float)variable_2) -> (int) {
        ret (int)param;
    }
';

$lexer = new Lexer($input);
try {
    $tokens = $lexer->tokenize();
} catch (Exception $e) {
    echo $e->getMessage();
}



foreach ($tokens as $token) {
    echo $token->type->getValue();
    if ($token->value !== null) {
        echo ': ' . $token->value;
    }
    echo PHP_EOL;
}
```

The above example will output:

```
fn
identifier: example_fn
(
(int)
identifier: variable_1
,
(float)
identifier: variable_2
)
->
(int)
{
ret
(int)
identifier: param
;
}
EOF
```

## Author

- [Yasin Özkaya](https://github.com/yasinldev/)