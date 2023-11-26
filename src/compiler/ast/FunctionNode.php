<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class FunctionNode extends Ast
{
    public function __construct(
        public ?array  $parameters,
        public ast     $body,
        public ?Token  $token,
        public ?string $returnType,
        public string  $name,
    )
    {
        parent::__construct('fn', [$body], $token, $name);
    }
}