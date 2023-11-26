<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class BlockNode extends Ast
{
    public function __construct(
        public ?array $statements,
        public ?Token $token
    )
    {
        parent::__construct('block', $statements, $token);
    }
}