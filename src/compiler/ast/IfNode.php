<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class IfNode extends Ast
{
    public function __construct(
        public ast    $condition,
        public ast    $body,
        public ?ast   $elseif,
        public ?ast   $else,
        public ?Token $token
    )
    {
        parent::__construct('if', [$condition, $body, $elseif, $else], $token);
    }
}