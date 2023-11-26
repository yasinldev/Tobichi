<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class VariableNode extends Ast
{
    public function __construct(
        public ?Token $token
    )
    {
        parent::__construct('variable', [$token], $token);
    }
}