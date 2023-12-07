<?php

namespace Tobichi\LogErrorListener;

use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;

final class LogErrorListener extends BaseErrorListener {
    private array $errors;

    public function __construct() {
        $this->errors = array();
    }

    public function syntaxError (
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ) : void {
        $this->errors[] = "Error at {$line}:{$charPositionInLine} {$msg}";
    }
}