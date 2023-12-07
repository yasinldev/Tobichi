/*
    -> Tobichi Programming Language
    -> @autor: yasinldev
    -> @file: tobichi_lexer.g4 (Lexer)
*/
lexer grammar tobichi_lexer;

NUMBER: '(int)';
FLOAT: '(float)';
STRING: '(string)';
BOOL: '(bool)';
CHAR: '(char)';
VOID: 'void';
ARRAY: '(array)';

// Keywords
TRUE: 'true';
FALSE: 'false';
IF: 'if';
ELSEIF: 'elseif';
ELSE: 'else';
WHILE: 'while';
FOR: 'for';
FOREACH: 'foreach';
DO: 'do';
RETURN: 'ret';
BREAK: 'break';
CONTINUE: 'continue';
FUNCTION: 'fn';
CLASS: 'class';
MUTABLE: 'mutable';
ENUM: 'enum';
STRUCT: 'struct';
IMPORT: 'import';

// Operators
PLUS: '+';
MINUS: '-';
MULT: '*';
DIV: '/';
MODULO: '%';
ASSIGN: '=';
PLUS_ASSIGN: '+=';
MINUS_ASSIGN: '-=';
MULT_ASSIGN: '*=';
DIV_ASSIGN: '/=';
MODULO_ASSIGN: '%=';
AND: '&&';
OR: '||';
NOT: '!';
EQ: '==';
NEQ: '!=';
LT: '<';
GT: '>';
LTE: '<=';
GTE: '>=';
COLON: ':';
COMMA: ',';
SEMICOLON: ';';
DOT: '.';
ARROW: '->';
QUESTION: '?';
OPEN_PAREN: '(';
CLOSE_PAREN: ')';
OPEN_BRACE: '{';
CLOSE_BRACE: '}';
OPEN_BRACKET: '[';
CLOSE_BRACKET: ']';
DOUBLE_QUOTE: '"';
SINGLE_QUOTE: '\'';
INCR: '++';
DECR: '--';
DOLLAR: '$';
LEFT_SHIFT: '<<';
RIGHT_SHIFT: '>>';

// tokens
IDENTIFIER: [a-zA-Z_][a-zA-Z0-9_]*;
NUMBER_LITERAL: [0-9]+;
FLOAT_LITERAL: [0-9]+[.][0-9]+;
STRING_LITERAL: DOUBLE_QUOTE .*? DOUBLE_QUOTE;
CHAR_LITERAL: SINGLE_QUOTE . SINGLE_QUOTE;

// comments
COMMENT: '//' ~[\r\n]* -> skip;
MULTILINE_COMMENT: '/*' .*? '*/' -> skip;

// whitespaces
WS : [ \t\r\n]+ -> skip;