<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class ArrayNode extends Ast
{
    public function __construct(
        public ?array $elements,
        public ?Token $token
    )
    {
        parent::__construct('(array)', $elements, $token);
    }
}