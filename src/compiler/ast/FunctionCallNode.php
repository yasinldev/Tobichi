<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class FunctionCallNode extends Ast
{
    public function __construct(
        public ast    $name,
        public ?array $arguments,
        public ?Token $token
    )
    {
        parent::__construct('functionCall', [$name, ...$arguments], $token);
    }
}