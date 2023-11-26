<?php

namespace Compiler\Ast;

use Compiler\Lexer\Token;

class Ast {
    public function __construct(
        public string $type,
        public array $children = [],
        public ?Token $token = null,
    ) {}
}
