<?php

/**
 * The Tobichi Programming Language
 *
 * @author yasinldev (https://github.com/yasinldev)
 * @license MIT
 * @package Member of Compiler (src/compiler/parser/Parser.php)
 */

namespace Compiler\parser;

use Compiler\Ast\ArrayNode;
use Compiler\Ast\AssignNode;
use Compiler\Ast\BinaryNode;
use Compiler\Ast\BlockNode;
use Compiler\Ast\ForNode;
use Compiler\Ast\FunctionCallNode;
use Compiler\Ast\FunctionNode;
use Compiler\Ast\IfNode;
use Compiler\Ast\NumberNode;
use Compiler\Ast\ReturnNode;
use Compiler\Ast\UnaryNode;
use Compiler\Ast\VariableNode;
use Compiler\Ast\WhileNode;
use Exception;
use Compiler\AST\{
    Ast,
};

use Compiler\lexer\Lexer;
use Compiler\lexer\Token;
use Compiler\lexer\TokenTypes;

define('ROOT', dirname(__DIR__, 3));
require_once ROOT . '/vendor/autoload.php';

class Parser {
    private lexer $lexer;
    private Token $currentToken;

    /**
     * @throws Exception
     */
    public function __construct(Lexer $lexer) {
        $this->lexer = $lexer;
        $this->currentToken = $this->lexer->getNextToken();
    }

    /**
     * @throws Exception
     */
    private function eat(TokenTypes $tokenType): void {
        if ($this->currentToken->type == $tokenType) {
            $this->currentToken = $this->lexer->getNextToken();
        } else {
            throw new Exception("
                Unexpected Token: {$this->currentToken->type->value}. Expected: {$tokenType->getValue()}, at position {$this->lexer->getPosition()}.
            ");
        }
    }

    /**
     * @throws Exception
     */
    private function unary(): Ast {
        $token = $this->currentToken;

        if ($token->type == TokenTypes::T_PLUS || $token->type == TokenTypes::T_MINUS) {
            $this->eat($token->type);
            return new UnaryNode($this->factor(), $token);
        }

        throw new Exception("Unexpected Token: {$token->type->value}. Expected: Arithmetic Operators, at position {$this->lexer->getPosition()}.");
    }

    /**
     * @throws Exception
     */
    private function factor(): Ast {
        $token = $this->currentToken;
        //echo $token->type->value. $token->value . PHP_EOL;

        switch ($token->type) {
            case TokenTypes::T_PLUS:
            case TokenTypes::T_MINUS:
                return $this->unary();

            case TokenTypes::T_NUMBER:
                $this->eat(TokenTypes::T_NUMBER);
                return new NumberNode($token);

            case TokenTypes::T_OPEN_PARENTHESIS:
                $this->eat(TokenTypes::T_OPEN_PARENTHESIS);
                $node = $this->expr();
                $this->eat(TokenTypes::T_CLOSE_PARENTHESIS);
                return $node;

            case TokenTypes::T_ASSIGN:
                $this->eat(TokenTypes::T_ASSIGN);
                $stringedExpr = $this->expr();
                return new AssignNode($this->variable(), $stringedExpr->type, $token);

            case TokenTypes::T_STRING:
            case TokenTypes::T_INT:
            case TokenTypes::T_BOOL:
            case TokenTypes::T_CHAR:
            case TokenTypes::T_FLOAT:
            case TokenTypes::T_ARRAY:
                return $this->variable();

            case TokenTypes::T_INCREMENT:
            case TokenTypes::T_DECREMENT:
                $this->eat($token->type);
                return new UnaryNode($this->variable(), $token);

            case TokenTypes::T_SEMICOLON:
                $this->eat(TokenTypes::T_SEMICOLON);
                break;

            case TokenTypes::T_IDENTIFIER:
                $this->eat(TokenTypes::T_IDENTIFIER);
                return new VariableNode($token, $token->value);

            case TokenTypes::T_RETURN:
                $this->eat(TokenTypes::T_RETURN);
                return new ReturnNode($this->expr(), $token);

            default:
                $string = $token->type->value;
                throw new Exception("Unexpected Token: {$string}. Expected: Data Types, at position {$this->lexer->getPosition()}.");
        }

        // Bu kısım çalışmayabilir. o yüzden yorum satırı koydum.
        return new VariableNode($token, $token->value);
    }

    /**
     * @throws Exception
     */
    private function variable(): Ast {
        $tokenType = $this->currentToken->type;

        switch ($tokenType) {
            case TokenTypes::T_INT:
            case TokenTypes::T_STRING:
            case TokenTypes::T_BOOL:
            case TokenTypes::T_CHAR:
            case TokenTypes::T_FLOAT:
            case TokenTypes::T_ARRAY:
                $this->eat($tokenType);
            break;
            case TokenTypes::T_IDENTIFIER:
                $this->eat(TokenTypes::T_IDENTIFIER);
                break;
            case TokenTypes::T_SEMICOLON:
                $this->eat(TokenTypes::T_SEMICOLON);
                break;
            default:
                throw new Exception("Unexpected Token: {$tokenType->name}. Expected: Data Types, at position {$this->lexer->getPosition()}.");
        }

        return new VariableNode($this->currentToken, $tokenType->value);
    }


    /**
     * @throws Exception
     */
    private function expr(): Ast {
        $node = $this->term();

        while (
            $this->currentToken->type == TokenTypes::T_PLUS ||
            $this->currentToken->type == TokenTypes::T_MINUS
        ) {
            $token = $this->currentToken;

            switch ($token->type) {
                case TokenTypes::T_PLUS:
                    $this->eat(TokenTypes::T_PLUS);
                    break;
                case TokenTypes::T_MINUS:
                    $this->eat(TokenTypes::T_MINUS);
                    break;
                default:
                    throw new Exception("Unexpected Token: {$token->type->value}. Expected: Arithmetic Operators, at position {$this->lexer->getPosition()}.");
            }

            $node = new BinaryNode($node, $this->term(), $token);
        }

        return $node;
    }

    /**
     * @throws Exception
     */
    private function term(): Ast {
        $node = $this->factor();

        while (
            $this->currentToken->type == TokenTypes::T_MULTIPLY ||
            $this->currentToken->type == TokenTypes::T_DIVIDE ||
            $this->currentToken->type == TokenTypes::T_MODULO
        ) {
            $token = $this->currentToken;

            switch ($token->type) {
                case TokenTypes::T_MULTIPLY:
                    $this->eat(TokenTypes::T_MULTIPLY);
                    break;
                case TokenTypes::T_DIVIDE:
                    $this->eat(TokenTypes::T_DIVIDE);
                    break;
                case TokenTypes::T_MODULO:
                    $this->eat(TokenTypes::T_MODULO);
                    break;
                default:
                    throw new Exception("Unexpected Token: {$token->type->value}. Expected: Arithmetic Operators, at position {$this->lexer->getPosition()}.");
            }

            $node = new BinaryNode($node, $this->factor(), $token);
        }

        return $node;
    }

    /**
     * @throws Exception
     */
    private function fn(): Ast {
        $this->eat(TokenTypes::T_FUNCTION);

        $name = $this->currentToken->value; // function name

        $this->eat(TokenTypes::T_IDENTIFIER);
        $this->eat(TokenTypes::T_OPEN_PARENTHESIS);
        $params = [];
        while ($this->currentToken->type !== TokenTypes::T_CLOSE_PARENTHESIS) {
            $params[] = $this->variable();
            if ($this->currentToken->type == TokenTypes::T_COMMA) {
                $this->eat(TokenTypes::T_COMMA);
            }
        }

        $this->eat(TokenTypes::T_CLOSE_PARENTHESIS);
        $returnType = null;

        if ($this->currentToken->type == TokenTypes::T_ARROW) {
            $this->eat(TokenTypes::T_ARROW);

            $returnType = $this->currentToken->type;
            $this->eat($returnType);
        }

        $this->eat(TokenTypes::T_OPEN_BRACE);
        $statements = $this->statements();
        $this->eat(TokenTypes::T_CLOSE_BRACE);

        return new FunctionNode($params, $statements, $this->currentToken, $returnType->value, $name);
    }

    /**
     * @throws Exception
     */
    private function statements(): Ast {
        $statements = [];

        while ($this->currentToken->type !== TokenTypes::T_CLOSE_BRACE) {
            $statements[] = $this->statement();
        }

        return new BlockNode($statements, $this->currentToken);
    }

    /**
     * @throws Exception
     */
    private function statement(): Ast {
        $token = $this->currentToken;

        switch ($token->type) {
            case TokenTypes::T_RETURN: return $this->parseReturnStatement();
            case TokenTypes::T_IF: return $this->parseIfStatement();
            case TokenTypes::T_WHILE: return $this->parseWhileStatement();
            case TokenTypes::T_FOR: return $this->parseForStatement();
            case TokenTypes::T_FUNCTION: return $this->fn();
        }

        return $this->expr();
    }

    /**
     * @throws Exception
     */

    private function parseReturnStatement(): Ast {
        $this->eat(TokenTypes::T_RETURN);
        $value = $this->expr();

        return new ReturnNode($value, $this->currentToken);
    }

    /**
     * @throws Exception
     */
    private function parseIfStatement(): Ast {
        $this->eat(TokenTypes::T_IF);
        $condition = $this->expr();
        $this->eat(TokenTypes::T_OPEN_BRACE);
        $statements = $this->statements();
        $this->eat(TokenTypes::T_CLOSE_BRACE);

        $elseif = null;
        $else = null;

        if ($this->currentToken->type == TokenTypes::T_ELSEIF) {
            $this->eat(TokenTypes::T_ELSEIF);
            $this->eat(TokenTypes::T_OPEN_BRACE);
            $elseif = $this->statements();
            $this->eat(TokenTypes::T_CLOSE_BRACE);
        } else if ($this->currentToken->type == TokenTypes::T_ELSE) {
            $this->eat(TokenTypes::T_ELSE);
            $this->eat(TokenTypes::T_OPEN_BRACE);
            $else = $this->statements();
            $this->eat(TokenTypes::T_CLOSE_BRACE);
        }

        return new IfNode($condition, $statements, $elseif, $else, $this->currentToken);
    }

    /**
     * @throws Exception
     */
    private function parseWhileStatement(): Ast {
        $this->eat(TokenTypes::T_WHILE);
        $condition = $this->expr();
        $this->eat(TokenTypes::T_OPEN_BRACE);
        $statements = $this->statements();
        $this->eat(TokenTypes::T_CLOSE_BRACE);

        return new WhileNode($condition, $statements, $this->currentToken);
    }

    /**
     * @throws Exception
     */
    private function parseForStatement(): Ast {
        $this->eat(TokenTypes::T_FOR);
        $this->eat(TokenTypes::T_OPEN_PARENTHESIS);
        $init = $this->expr();
        $this->eat(TokenTypes::T_SEMICOLON);
        $condition = $this->expr();
        $this->eat(TokenTypes::T_SEMICOLON);
        $increment = $this->expr();
        $this->eat(TokenTypes::T_CLOSE_PARENTHESIS);
        $this->eat(TokenTypes::T_OPEN_BRACE);
        $statements = $this->statements();
        $this->eat(TokenTypes::T_CLOSE_BRACE);

        return new ForNode($init, $condition, $increment, $statements, $this->currentToken);
    }

    /**
     * @throws Exception
     */
    public function parseProgram(): Ast {
        $statements = [];

        while ($this->currentToken->type !== TokenTypes::T_EOF) {
            $statements[] = $this->statement();
        }

        return new BlockNode($statements, $this->currentToken);
    }
}

$input = '
    (string)variable = "Hello World";
';
try {
    $lexer = new Lexer($input);
    $parser = new Parser($lexer);
    $ast = $parser->parseProgram();
    var_dump($ast);
} catch (Exception $e) {
    echo $e->getMessage();
}