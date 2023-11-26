<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class WhileNode extends Ast
{
    public function __construct(
        public ast    $condition,
        public ast    $body,
        public ?Token $token
    )
    {
        parent::__construct('while', [$condition, $body], $token);
    }
}