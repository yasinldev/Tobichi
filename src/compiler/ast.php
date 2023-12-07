<?php

/*
 *  Tobichi Programming Language
 *  @author: yasinldev
 *  @file
*/

require_once __DIR__ . '/../../vendor/autoload.php';
require_once  __DIR__ . '/LogErrorListener.php';

require_once __DIR__ . '/tobichi_lexer.php';
require_once __DIR__ . '/tobichi_parser.php';
require_once __DIR__ . '/tobichi_parserBaseListener.php';
require_once __DIR__ . '/tobichi_parserListener.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Tobichi\LogErrorListener\LogErrorListener;
use \tobichi_parserBaseListener as TobichiBaseListener;

$input = InputStream::fromPath($argv[1]);

$lexer = new tobichi_lexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new tobichi_parser($tokens);

$error_list = new LogErrorListener();
$parser->addErrorListener($error_list);

$tree = $parser->program();

class TobichiListener extends TobichiBaseListener {
    public function enterProgram($context): void {
        echo "Entering statement: " . $context->getText() . PHP_EOL;
    }
}

$listener = new TobichiListener();
ParseTreeWalker::DEFAULT()->walk($listener, $tree);
