<?php

namespace Compiler\lexer;
use Compiler\lexer\TokenTypes;

class Token
{
    public function __construct(
        public TokenTypes $type,
        public ?string    $value = null,
    ) {}
}