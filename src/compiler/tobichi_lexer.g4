/*
    -> Tobichi Programming Language
    -> @autor: yasinldev
    -> @file: tobichi_lexer.g4 (Lexer)
*/
lexer grammar tobichi_lexer;

T_NUMBER: '(int)';
T_FLOAT: '(float)';
T_STRING: '(string)';
T_BOOL: '(bool)';
T_CHAR: '(char)';
T_VOID: 'void';
T_ARRAY: '(array)';

// Keywords
T_TRUE: 'true';
T_FALSE: 'false';
T_IF: 'if';
T_ELSEIF: 'elseif';
T_ELSE: 'else';
T_WHILE: 'while';
T_FOR: 'for';
T_FOREACH: 'foreach';
T_DO: 'do';
T_RETURN: 'ret';
T_BREAK: 'break';
T_CONTINUE: 'continue';
T_FUNCTION: 'fn';
T_CLASS: 'class';
T_MUTABLE: 'mutable';
T_ENUM: 'enum';
T_STRUCT: 'struct';
T_IMPORT: 'import';
T_NULL: 'null';

// Operators
T_PLUS: '+';
T_MINUS: '-';
T_MULT: '*';
T_DIV: '/';
T_MODULO: '%';
T_ASSIGN: '=';
T_PLUS_ASSIGN: '+=';
T_MINUS_ASSIGN: '-=';
T_MULT_ASSIGN: '*=';
T_DIV_ASSIGN: '/=';
T_MODULO_ASSIGN: '%=';
T_AND: '&&';
T_OR: '||';
T_NOT: '!';
T_EQ: '==';
T_NEQ: '!=';
T_LT: '<';
T_GT: '>';
T_LTE: '<=';
T_GTE: '>=';
T_COLON: ':';
T_COMMA: ',';
T_SEMICOLON: ';';
T_DOT: '.';
T_ARROW: '->';
T_QUESTION: '?';
T_OPEN_PAREN: '(';
T_CLOSE_PAREN: ')';
T_OPEN_BRACE: '{';
T_CLOSE_BRACE: '}';
T_OPEN_BRACKET: '[';
T_CLOSE_BRACKET: ']';
T_DOUBLE_QUOTE: '"';
T_SINGLE_QUOTE: '\'';
T_INCR: '++';
T_DECR: '--';
T_DOLLAR: '$';
T_LEFT_SHIFT: '<<';
T_RIGHT_SHIFT: '>>';

// tokens
T_IDENTIFIER: [a-zA-Z_][a-zA-Z0-9_]*;
T_NUMBER_LITERAL: [0-9]+;
T_FLOAT_LITERAL: [0-9]+[.][0-9]+;
T_STRING_LITERAL: T_DOUBLE_QUOTE .*? T_DOUBLE_QUOTE;
T_CHAR_LITERAL: T_SINGLE_QUOTE . T_SINGLE_QUOTE;

// comments
T_COMMENT: '//' ~[\r\n]* -> skip;
T_MULTILINE_COMMENT: '/*' .*? '*/' -> skip;

// whitespaces
T_WS : [ \t\r\n]+ -> skip;