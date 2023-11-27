<?php

namespace Compiler\lexer;

enum TokenTypes: string
{
    case T_INT = '(int)';
    case T_FLOAT = '(float)';
    case T_STRING = '(string)';
    case T_BOOL = '(bool)';
    case T_ARRAY = '(array)';
    case T_CHAR = '(char)';
    case T_VOID = 'void';

    case T_TRUE = 'true';
    case T_FALSE = 'false';

    case T_RETURN = 'ret';
    case T_BREAK = 'break';
    case T_CONTINUE = 'continue';

    case T_FUNCTION = 'fn';
    case T_CLASS = 'class';
    case T_PUBLIC = 'mutable';
    case T_ENUM = 'enum';
    case T_IMPORT = 'import';
    case T_STRUCT = 'struct';

    case T_NUMBER = 'number';
    case T_IDENTIFIER = 'identifier';

    case T_DOLLAR = '$';

    case T_IF = 'if';
    case T_ELSEIF = 'elseif';
    case T_ELSE = 'else';

    case T_FOR = 'for';
    case T_WHILE = 'while';
    case T_DO = 'do';

    case T_PLUS = '+';
    case T_MINUS = '-';
    case T_MULTIPLY = '*';
    case T_DIVIDE = '/';
    case T_MODULO = '%';
    case T_INCREMENT = '++';
    case T_DECREMENT = '--';
    case T_ASSIGN = '=';
    case T_PLUS_ASSIGN = '+=';
    case T_MINUS_ASSIGN = '-=';
    case T_MULTIPLY_ASSIGN = '*=';
    case T_DIVIDE_ASSIGN = '/=';
    case T_MODULO_ASSIGN = '%=';
    case T_EQUAL = '==';
    case T_NOT_EQUAL = '!=';
    case T_GREATER_THAN = '>';
    case T_LESS_THAN = '<';
    case T_GREATER_THAN_OR_EQUAL = '>=';
    case T_LESS_THAN_OR_EQUAL = '<=';
    case T_AND = '&&';
    case T_OR = '||';
    case T_NOT = '!';
    case T_COMMA = ',';
    case T_SEMICOLON = ';';
    case T_COLON = ':';
    case T_DOT = '.';
    case T_ARROW = '->';
    case T_OPEN_PARENTHESIS = '(';
    case T_CLOSE_PARENTHESIS = ')';
    case T_OPEN_BRACKET = '[';
    case T_CLOSE_BRACKET = ']';
    case T_OPEN_BRACE = '{';
    case T_CLOSE_BRACE = '}';
    case T_COMMENT = '//';
    case T_DOUBLE_QUOTE = '"';
    case T_SINGLE_QUOTE = '\'';

    case T_EOF = 'EOF';

    public function getValue(): string
    {
        return $this->value;
    }
}