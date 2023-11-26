<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class ForNode extends Ast
{
    public function __construct(
        public ast    $initialization,
        public ast    $condition,
        public ast    $increment,
        public ast    $body,
        public ?Token $token
    )
    {
        parent::__construct('for', [$initialization, $condition, $increment, $body], $token);
    }
}