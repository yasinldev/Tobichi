<?php

/**
 * The Tobichi Programming Language
 *
 * @author yasinldev (https://github.com/yasinldev)
 * @license MIT
 * @package Member of Compiler (src/compiler/lexer/Lexer.php)
 */

namespace Compiler\lexer;

use Exception;

use Compiler\lexer\Token;
use Compiler\lexer\TokenTypes;


// This class is used to tokenize the input.
class Lexer {
    private string $input;
    private int $position = 0;
    private ?string $currentChar = null;

    // The constructor accepts the input string.
    public function __construct(string $input) {
        $this->input = $input;
        $this->currentChar = $this->input[$this->position];
    }

    // This function is used to advance the position of the current character.
    private function advance(): void {
        $this->position++;
        $this->currentChar = $this->input[$this->position] ?? null;
    }

    /**
     * @return string
     * @desc This function is used to get the next character.
     */
    public function peek(): string {
        return $this->input[$this->position + 1];
    }

    // This function is used to skip the whitespace.
    private function skipWhitespace(): void {
        while ($this->currentChar !== null && ctype_space($this->currentChar)) {
            $this->advance();
        }
    }

    /**
     * @return Token
     * @desc This function is used to get the numbers.
     */
    private function numbers(): Token {
        $result = '';
        while ($this->currentChar !== null && ctype_digit($this->currentChar)) {
            $result .= $this->currentChar;
            $this->advance();
        }

        return new Token(TokenTypes::T_NUMBER, $result);
    }

    /**
     * @throws Exception
     * @return Token
     * @desc This function is used to get the next token.
     */
    public function getNextToken(): Token {
        while ($this->currentChar !== null) {
            if (ctype_space($this->currentChar) || $this->currentChar === ' ') {
                $this->skipWhitespace();
            }

            if (ctype_digit((string)$this->currentChar)) {
                return $this->numbers();
            }

            // This is the switch statement for the operators.
            switch ($this->currentChar) {
                case '+':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_PLUS_ASSIGN);
                    } else if ($this->currentChar === '+') {
                        $this->advance();
                        return new Token(TokenTypes::T_INCREMENT);
                    } else {
                        return new Token(TokenTypes::T_PLUS);
                    }
                case '-':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_MINUS_ASSIGN);
                    } else if ($this->currentChar === '-') {
                        $this->advance();
                        return new Token(TokenTypes::T_DECREMENT);
                    } else if ($this->currentChar === '>') {
                        $this->advance();
                        return new Token(TokenTypes::T_ARROW);
                    } else {
                        return new Token(TokenTypes::T_MINUS);
                    }
                case '*':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_MULTIPLY_ASSIGN);
                    } else {
                        return new Token(TokenTypes::T_MULTIPLY);
                    }
                case '/':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_DIVIDE_ASSIGN);
                    } else if ($this->currentChar === '/') {
                        $this->advance();
                        return new Token(TokenTypes::T_COMMENT);
                    } else {
                        return new Token(TokenTypes::T_DIVIDE);
                    }
                case '%':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_MODULO_ASSIGN);
                    } else {
                        return new Token(TokenTypes::T_MODULO);
                    }
                case '=':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_EQUAL);
                    } else {
                        return new Token(TokenTypes::T_ASSIGN);
                    }
                case '!':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_NOT_EQUAL);
                    } else {
                        return new Token(TokenTypes::T_NOT);
                    }
                case '$':
                    $this->advance();
                    if (ctype_alpha((string)$this->currentChar)) {
                        $result = '';
                        while ($this->currentChar !== null && (ctype_alnum($this->currentChar) || $this->currentChar === '_')) {
                            $result .= $this->currentChar;
                            $this->advance();
                        }

                        return new Token(TokenTypes::T_IDENTIFIER, $result);
                    }
                    return new Token(TokenTypes::T_DOLLAR);
                case '>':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_GREATER_THAN_OR_EQUAL);
                    } else {
                        return new Token(TokenTypes::T_GREATER_THAN);
                    }
                case '<':
                    $this->advance();
                    if ($this->currentChar === '=') {
                        $this->advance();
                        return new Token(TokenTypes::T_LESS_THAN_OR_EQUAL);
                    } else {
                        return new Token(TokenTypes::T_LESS_THAN);
                    }
                case '&':
                    $this->advance();
                    if ($this->currentChar === '&') {
                        $this->advance();
                        return new Token(TokenTypes::T_AND);
                    } else {
                        throw new Exception('Unexpected character: ' . $this->currentChar);
                    }
                case '|':
                    $this->advance();
                    if ($this->currentChar === '|') {
                        $this->advance();
                        return new Token(TokenTypes::T_OR);
                    } else {
                        throw new Exception('Unexpected character: ' . $this->currentChar);
                    }
                case ',':
                    $this->advance();
                    return new Token(TokenTypes::T_COMMA);
                case ';':
                    $this->advance();
                    return new Token(TokenTypes::T_SEMICOLON);
                case ':':
                    $this->advance();
                    return new Token(TokenTypes::T_COLON);
                case '.':
                    $this->advance();
                    return new Token(TokenTypes::T_DOT);
                case '(':
                    $this->advance();
                    if ($this->input[$this->position] === 's' && $this->input[$this->position + 1] === 't' && $this->input[$this->position + 2] === 'r' && $this->input[$this->position + 3] === 'i' && $this->input[$this->position + 4] === 'n' && $this->input[$this->position + 5] === 'g' && $this->input[$this->position + 6] === ')') {
                        for ($i = 0; $i < 7; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_STRING);
                    } elseif ($this->input[$this->position] === 'i' && $this->input[$this->position + 1] === 'n' && $this->input[$this->position + 2] === 't' && $this->input[$this->position + 3] === ')') {
                        for ($i = 0; $i < 4; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_INT);
                    } elseif ($this->input[$this->position] === 'f' && $this->input[$this->position + 1] === 'l' && $this->input[$this->position + 2] === 'o' && $this->input[$this->position + 3] === 'a' && $this->input[$this->position + 4] === 't' && $this->input[$this->position + 5] === ')') {
                        for ($i = 0; $i < 6; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_FLOAT);
                    } elseif ($this->input[$this->position] === 'b' && $this->input[$this->position + 1] === 'o' && $this->input[$this->position + 2] === 'o' && $this->input[$this->position + 3] === 'l' && $this->input[$this->position + 4] === ')') {
                        for ($i = 0; $i < 5; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_BOOL);
                    } elseif ($this->input[$this->position] === 'a' && $this->input[$this->position + 1] === 'r' && $this->input[$this->position + 2] === 'r' && $this->input[$this->position + 3] === 'a' && $this->input[$this->position + 4] === 'y' && $this->input[$this->position + 5] === ')') {
                        for ($i = 0; $i < 6; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_ARRAY);
                    } elseif ($this->input[$this->position] === 'c' && $this->input[$this->position + 1] === 'h' && $this->input[$this->position + 2] === 'a' && $this->input[$this->position + 3] === 'r' && $this->input[$this->position + 4] === ')') {
                        for ($i = 0; $i < 5; $i++) {
                            $this->advance();
                        }
                        return new Token(TokenTypes::T_CHAR);
                    }
                    return new Token(TokenTypes::T_OPEN_PARENTHESIS);
                case ')':
                    $this->advance();
                    return new Token(TokenTypes::T_CLOSE_PARENTHESIS);
                case '[':
                    $this->advance();
                    return new Token(TokenTypes::T_OPEN_BRACKET);
                case ']':
                    $this->advance();
                    return new Token(TokenTypes::T_CLOSE_BRACKET);
                case '{':
                    $this->advance();
                    return new Token(TokenTypes::T_OPEN_BRACE);
                case '}':
                    $this->advance();
                    return new Token(TokenTypes::T_CLOSE_BRACE);
                default:
                    // This is the switch statement for the keywords.
                    if (ctype_alpha((string)$this->currentChar)) {
                        $result = '';
                        while ($this->currentChar !== null && (ctype_alnum($this->currentChar) || $this->currentChar === '_')) {
                            $result .= $this->currentChar;
                            $this->advance();
                        }
                        return match ($result) {
                            'void' => new Token(TokenTypes::T_VOID),
                            'true' => new Token(TokenTypes::T_TRUE),
                            'false' => new Token(TokenTypes::T_FALSE),
                            'ret' => new Token(TokenTypes::T_RETURN),
                            'break' => new Token(TokenTypes::T_BREAK),
                            'continue' => new Token(TokenTypes::T_CONTINUE),
                            'mutable' => new Token(TokenTypes::T_PUBLIC),
                            'enum' => new Token(TokenTypes::T_ENUM),
                            'import' => new Token(TokenTypes::T_IMPORT),
                            'struct' => new Token(TokenTypes::T_STRUCT),
                            'fn' => new Token(TokenTypes::T_FUNCTION),
                            'class' => new Token(TokenTypes::T_CLASS),
                            'if' => new Token(TokenTypes::T_IF),
                            'elseif' => new Token(TokenTypes::T_ELSEIF),
                            'else' => new Token(TokenTypes::T_ELSE),
                            'for' => new Token(TokenTypes::T_FOR),
                            'while' => new Token(TokenTypes::T_WHILE),
                            'do' => new Token(TokenTypes::T_DO),
                            default => new Token(TokenTypes::T_IDENTIFIER, $result),
                        };
                    }
            }
        }

        return new Token(TokenTypes::T_EOF);
    }

    /**
     * @throws Exception
     * @return array
     * @desc This function is used to tokenize the input.
     */
    public function tokenize(): array {
        $tokens = [];
        while ($token = $this->getNextToken()) {
            $tokens[] = $token;
            if ($token->type === TokenTypes::T_EOF) {
                break;
            }
        }

        return $tokens;
    }

    // This function is used to get the current position of the lexer.
    public function getPosition(): int {
        return $this->position;
    }
}