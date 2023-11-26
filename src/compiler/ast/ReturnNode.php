<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class ReturnNode extends Ast
{
    public function __construct(
        public ast    $value,
        public ?Token $token
    )
    {
        parent::__construct('return', [$value], $token);
    }
}