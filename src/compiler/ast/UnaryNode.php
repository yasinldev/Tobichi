<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class UnaryNode extends Ast
{
    public function __construct(
        public ast    $node,
        public ?Token $token
    )
    {
        parent::__construct('unary', [$node], $token);
    }
}