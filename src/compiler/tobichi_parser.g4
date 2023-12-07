/*
    -> Tobichi Programming Language
    -> @autor: yasinldev
    -> @file: tobichi_parser.g4 (Parser)
*/
parser grammar tobichi_parser;

options {
    language = PHP;
    tokenVocab = tobichi_lexer;
}

// Program
program: statement* EOF;

// Statements
statement: variableDeclaration
         | assignmentStatement
         | ifStatement
         | whileStatement
         | forStatement
         | foreachStatement
         | doWhileStatement
         | returnStatement
         | breakStatement
         | continueStatement
         | functionDeclaration
         | classDeclaration
         | importStatement
         | expressionStatement
         ;

// Variable Declaration
variableDeclaration: mutable? dataType T_IDENTIFIER (T_ASSIGN expression)?;

// Assignment Statement
assignmentStatement: variableOrField T_ASSIGN expression;

// Variable or Field

variableOrField: T_IDENTIFIER
               | T_IDENTIFIER T_DOT T_IDENTIFIER
               | T_IDENTIFIER T_OPEN_BRACKET expression T_CLOSE_BRACKET
               | T_IDENTIFIER T_DOT T_IDENTIFIER T_OPEN_BRACKET expression T_CLOSE_BRACKET
               ;

// If Statement
ifStatement: T_IF expression statement (T_ELSEIF expression statement)* (T_ELSE statement)?;

// While Statement
whileStatement: T_WHILE expression statement;

// For Statement
forStatement: T_FOR '(' forControl ')' statement;

forControl: variableDeclaration? T_SEMICOLON expression? T_SEMICOLON expression?;

// Foreach Statement
foreachStatement: T_FOREACH '(' T_IDENTIFIER T_COLON expression ')' statement;

// Do-While Statement
doWhileStatement: T_DO statement T_WHILE expression T_SEMICOLON;

// Return Statement
returnStatement: T_RETURN expression?;

// Break Statement
breakStatement: T_BREAK T_SEMICOLON;

// Continue Statement
continueStatement: T_CONTINUE T_SEMICOLON;

// Function Declaration
functionDeclaration: T_FUNCTION T_IDENTIFIER '(' parameterList? ')' dataType statement;

parameterList: parameter (T_COMMA parameter)*;

parameter: mutable? dataType T_IDENTIFIER;

// Class Declaration
classDeclaration: T_CLASS T_IDENTIFIER (T_COLON T_IDENTIFIER)? T_OPEN_BRACE classBody T_CLOSE_BRACE;

classBody: classMember*;

classMember: variableDeclaration
           | functionDeclaration
           ;

// Import Statement
importStatement: T_IMPORT T_IDENTIFIER (T_DOT T_IDENTIFIER)?;

// Expression Statement
expressionStatement: expression T_SEMICOLON;

// Expressions
expression: conditionalExpression;

conditionalExpression: logicalOrExpression (T_QUESTION expression T_COLON expression)?;

logicalOrExpression: logicalAndExpression (T_OR logicalAndExpression)*;

logicalAndExpression: equalityExpression (T_AND equalityExpression)*;

equalityExpression: relationalExpression (T_EQ | T_NEQ) relationalExpression;

relationalExpression: additiveExpression (T_LT | T_LTE | T_GT | T_GTE) additiveExpression;

additiveExpression: multiplicativeExpression ((T_PLUS | T_MINUS) multiplicativeExpression)*;

multiplicativeExpression: unaryExpression ((T_MULT | T_DIV | T_MODULO) unaryExpression)*;

unaryExpression: (T_PLUS | T_MINUS | T_NOT | T_INCR | T_DECR) unaryExpression
              | primaryExpression;

primaryExpression: literal
               | T_IDENTIFIER
               | '(' expression ')';

literal: T_NUMBER_LITERAL
      | T_FLOAT_LITERAL
      | T_STRING_LITERAL
      | T_CHAR_LITERAL
      | T_TRUE
      | T_FALSE
      | T_NULL
      ;

mutable: T_MUTABLE;

dataType: T_NUMBER
        | T_FLOAT
        | T_STRING
        | T_BOOL
        | T_CHAR
        | T_ARRAY
        | T_IDENTIFIER
        ;
