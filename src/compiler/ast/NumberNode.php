<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class NumberNode extends Ast
{
    public function __construct(
        public ?Token $token
    )
    {
        parent::__construct('number', [$token], $token);
    }
}