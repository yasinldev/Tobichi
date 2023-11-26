<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class BinaryNode extends Ast
{
    public function __construct(
        public ast    $left,
        public ast    $right,
        public ?Token $token
    )
    {
        parent::__construct('binary', [$left, $right], $token);
    }
}