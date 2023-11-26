<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class AssignNode extends Ast
{
    public function __construct(
        public VariableNode $variable,
        public string       $value,
        public ?Token       $token
    )
    {
        parent::__construct('assign', [$variable, $value], $token);
    }
}