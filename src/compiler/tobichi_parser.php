<?php

/*
 * Generated from tobichi_parser.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class tobichi_parser extends Parser
	{
		public const T_NUMBER = 1, T_FLOAT = 2, T_STRING = 3, T_BOOL = 4, T_CHAR = 5, 
               T_VOID = 6, T_ARRAY = 7, T_TRUE = 8, T_FALSE = 9, T_IF = 10, 
               T_ELSEIF = 11, T_ELSE = 12, T_WHILE = 13, T_FOR = 14, T_FOREACH = 15, 
               T_DO = 16, T_RETURN = 17, T_BREAK = 18, T_CONTINUE = 19, 
               T_FUNCTION = 20, T_CLASS = 21, T_MUTABLE = 22, T_ENUM = 23, 
               T_STRUCT = 24, T_IMPORT = 25, T_NULL = 26, T_PLUS = 27, T_MINUS = 28, 
               T_MULT = 29, T_DIV = 30, T_MODULO = 31, T_ASSIGN = 32, T_PLUS_ASSIGN = 33, 
               T_MINUS_ASSIGN = 34, T_MULT_ASSIGN = 35, T_DIV_ASSIGN = 36, 
               T_MODULO_ASSIGN = 37, T_AND = 38, T_OR = 39, T_NOT = 40, 
               T_EQ = 41, T_NEQ = 42, T_LT = 43, T_GT = 44, T_LTE = 45, 
               T_GTE = 46, T_COLON = 47, T_COMMA = 48, T_SEMICOLON = 49, 
               T_DOT = 50, T_ARROW = 51, T_QUESTION = 52, T_OPEN_PAREN = 53, 
               T_CLOSE_PAREN = 54, T_OPEN_BRACE = 55, T_CLOSE_BRACE = 56, 
               T_OPEN_BRACKET = 57, T_CLOSE_BRACKET = 58, T_DOUBLE_QUOTE = 59, 
               T_SINGLE_QUOTE = 60, T_INCR = 61, T_DECR = 62, T_DOLLAR = 63, 
               T_LEFT_SHIFT = 64, T_RIGHT_SHIFT = 65, T_IDENTIFIER = 66, 
               T_NUMBER_LITERAL = 67, T_FLOAT_LITERAL = 68, T_STRING_LITERAL = 69, 
               T_CHAR_LITERAL = 70, T_COMMENT = 71, T_MULTILINE_COMMENT = 72, 
               T_WS = 73;

		public const RULE_program = 0, RULE_statement = 1, RULE_variableDeclaration = 2, 
               RULE_assignmentStatement = 3, RULE_variableOrField = 4, RULE_ifStatement = 5, 
               RULE_whileStatement = 6, RULE_forStatement = 7, RULE_forControl = 8, 
               RULE_foreachStatement = 9, RULE_doWhileStatement = 10, RULE_returnStatement = 11, 
               RULE_breakStatement = 12, RULE_continueStatement = 13, RULE_functionDeclaration = 14, 
               RULE_parameterList = 15, RULE_parameter = 16, RULE_classDeclaration = 17, 
               RULE_classBody = 18, RULE_classMember = 19, RULE_importStatement = 20, 
               RULE_expressionStatement = 21, RULE_expression = 22, RULE_conditionalExpression = 23, 
               RULE_logicalOrExpression = 24, RULE_logicalAndExpression = 25, 
               RULE_equalityExpression = 26, RULE_relationalExpression = 27, 
               RULE_additiveExpression = 28, RULE_multiplicativeExpression = 29, 
               RULE_unaryExpression = 30, RULE_primaryExpression = 31, RULE_literal = 32, 
               RULE_mutable = 33, RULE_dataType = 34;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'statement', 'variableDeclaration', 'assignmentStatement', 
			'variableOrField', 'ifStatement', 'whileStatement', 'forStatement', 'forControl', 
			'foreachStatement', 'doWhileStatement', 'returnStatement', 'breakStatement', 
			'continueStatement', 'functionDeclaration', 'parameterList', 'parameter', 
			'classDeclaration', 'classBody', 'classMember', 'importStatement', 'expressionStatement', 
			'expression', 'conditionalExpression', 'logicalOrExpression', 'logicalAndExpression', 
			'equalityExpression', 'relationalExpression', 'additiveExpression', 'multiplicativeExpression', 
			'unaryExpression', 'primaryExpression', 'literal', 'mutable', 'dataType'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'(int)'", "'(float)'", "'(string)'", "'(bool)'", "'(char)'", 
		    "'void'", "'(array)'", "'true'", "'false'", "'if'", "'elseif'", "'else'", 
		    "'while'", "'for'", "'foreach'", "'do'", "'ret'", "'break'", "'continue'", 
		    "'fn'", "'class'", "'mutable'", "'enum'", "'struct'", "'import'", 
		    "'null'", "'+'", "'-'", "'*'", "'/'", "'%'", "'='", "'+='", "'-='", 
		    "'*='", "'/='", "'%='", "'&&'", "'||'", "'!'", "'=='", "'!='", "'<'", 
		    "'>'", "'<='", "'>='", "':'", "','", "';'", "'.'", "'->'", "'?'", 
		    "'('", "')'", "'{'", "'}'", "'['", "']'", "'\"'", "'''", "'++'", "'--'", 
		    "'\$'", "'<<'", "'>>'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "T_NUMBER", "T_FLOAT", "T_STRING", "T_BOOL", "T_CHAR", "T_VOID", 
		    "T_ARRAY", "T_TRUE", "T_FALSE", "T_IF", "T_ELSEIF", "T_ELSE", "T_WHILE", 
		    "T_FOR", "T_FOREACH", "T_DO", "T_RETURN", "T_BREAK", "T_CONTINUE", 
		    "T_FUNCTION", "T_CLASS", "T_MUTABLE", "T_ENUM", "T_STRUCT", "T_IMPORT", 
		    "T_NULL", "T_PLUS", "T_MINUS", "T_MULT", "T_DIV", "T_MODULO", "T_ASSIGN", 
		    "T_PLUS_ASSIGN", "T_MINUS_ASSIGN", "T_MULT_ASSIGN", "T_DIV_ASSIGN", 
		    "T_MODULO_ASSIGN", "T_AND", "T_OR", "T_NOT", "T_EQ", "T_NEQ", "T_LT", 
		    "T_GT", "T_LTE", "T_GTE", "T_COLON", "T_COMMA", "T_SEMICOLON", "T_DOT", 
		    "T_ARROW", "T_QUESTION", "T_OPEN_PAREN", "T_CLOSE_PAREN", "T_OPEN_BRACE", 
		    "T_CLOSE_BRACE", "T_OPEN_BRACKET", "T_CLOSE_BRACKET", "T_DOUBLE_QUOTE", 
		    "T_SINGLE_QUOTE", "T_INCR", "T_DECR", "T_DOLLAR", "T_LEFT_SHIFT", 
		    "T_RIGHT_SHIFT", "T_IDENTIFIER", "T_NUMBER_LITERAL", "T_FLOAT_LITERAL", 
		    "T_STRING_LITERAL", "T_CHAR_LITERAL", "T_COMMENT", "T_MULTILINE_COMMENT", 
		    "T_WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 73, 309, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 1, 0, 5, 0, 72, 8, 0, 10, 0, 12, 0, 75, 9, 0, 1, 
		    0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 93, 8, 1, 1, 2, 3, 2, 96, 8, 2, 1, 
		    2, 1, 2, 1, 2, 1, 2, 3, 2, 102, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 124, 8, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    5, 1, 5, 1, 5, 5, 5, 133, 8, 5, 10, 5, 12, 5, 136, 9, 5, 1, 5, 1, 
		    5, 3, 5, 140, 8, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 
		    1, 7, 1, 7, 1, 8, 3, 8, 153, 8, 8, 1, 8, 1, 8, 3, 8, 157, 8, 8, 1, 
		    8, 1, 8, 3, 8, 161, 8, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 
		    1, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 3, 11, 
		    179, 8, 11, 1, 12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 
		    1, 14, 1, 14, 3, 14, 191, 8, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 15, 
		    1, 15, 1, 15, 5, 15, 200, 8, 15, 10, 15, 12, 15, 203, 9, 15, 1, 16, 
		    3, 16, 206, 8, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 
		    3, 17, 215, 8, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 18, 5, 18, 222, 
		    8, 18, 10, 18, 12, 18, 225, 9, 18, 1, 19, 1, 19, 3, 19, 229, 8, 19, 
		    1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 235, 8, 20, 1, 21, 1, 21, 1, 21, 
		    1, 22, 1, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 248, 
		    8, 23, 1, 24, 1, 24, 1, 24, 5, 24, 253, 8, 24, 10, 24, 12, 24, 256, 
		    9, 24, 1, 25, 1, 25, 1, 25, 5, 25, 261, 8, 25, 10, 25, 12, 25, 264, 
		    9, 25, 1, 26, 1, 26, 1, 26, 1, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 
		    28, 1, 28, 1, 28, 5, 28, 277, 8, 28, 10, 28, 12, 28, 280, 9, 28, 1, 
		    29, 1, 29, 1, 29, 5, 29, 285, 8, 29, 10, 29, 12, 29, 288, 9, 29, 1, 
		    30, 1, 30, 1, 30, 3, 30, 293, 8, 30, 1, 31, 1, 31, 1, 31, 1, 31, 1, 
		    31, 1, 31, 3, 31, 301, 8, 31, 1, 32, 1, 32, 1, 33, 1, 33, 1, 34, 1, 
		    34, 1, 34, 0, 0, 35, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 
		    26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 
		    60, 62, 64, 66, 68, 0, 7, 1, 0, 41, 42, 1, 0, 43, 46, 1, 0, 27, 28, 
		    1, 0, 29, 31, 3, 0, 27, 28, 40, 40, 61, 62, 3, 0, 8, 9, 26, 26, 67, 
		    70, 3, 0, 1, 5, 7, 7, 66, 66, 313, 0, 73, 1, 0, 0, 0, 2, 92, 1, 0, 
		    0, 0, 4, 95, 1, 0, 0, 0, 6, 103, 1, 0, 0, 0, 8, 123, 1, 0, 0, 0, 10, 
		    125, 1, 0, 0, 0, 12, 141, 1, 0, 0, 0, 14, 145, 1, 0, 0, 0, 16, 152, 
		    1, 0, 0, 0, 18, 162, 1, 0, 0, 0, 20, 170, 1, 0, 0, 0, 22, 176, 1, 
		    0, 0, 0, 24, 180, 1, 0, 0, 0, 26, 183, 1, 0, 0, 0, 28, 186, 1, 0, 
		    0, 0, 30, 196, 1, 0, 0, 0, 32, 205, 1, 0, 0, 0, 34, 210, 1, 0, 0, 
		    0, 36, 223, 1, 0, 0, 0, 38, 228, 1, 0, 0, 0, 40, 230, 1, 0, 0, 0, 
		    42, 236, 1, 0, 0, 0, 44, 239, 1, 0, 0, 0, 46, 241, 1, 0, 0, 0, 48, 
		    249, 1, 0, 0, 0, 50, 257, 1, 0, 0, 0, 52, 265, 1, 0, 0, 0, 54, 269, 
		    1, 0, 0, 0, 56, 273, 1, 0, 0, 0, 58, 281, 1, 0, 0, 0, 60, 292, 1, 
		    0, 0, 0, 62, 300, 1, 0, 0, 0, 64, 302, 1, 0, 0, 0, 66, 304, 1, 0, 
		    0, 0, 68, 306, 1, 0, 0, 0, 70, 72, 3, 2, 1, 0, 71, 70, 1, 0, 0, 0, 
		    72, 75, 1, 0, 0, 0, 73, 71, 1, 0, 0, 0, 73, 74, 1, 0, 0, 0, 74, 76, 
		    1, 0, 0, 0, 75, 73, 1, 0, 0, 0, 76, 77, 5, 0, 0, 1, 77, 1, 1, 0, 0, 
		    0, 78, 93, 3, 4, 2, 0, 79, 93, 3, 6, 3, 0, 80, 93, 3, 10, 5, 0, 81, 
		    93, 3, 12, 6, 0, 82, 93, 3, 14, 7, 0, 83, 93, 3, 18, 9, 0, 84, 93, 
		    3, 20, 10, 0, 85, 93, 3, 22, 11, 0, 86, 93, 3, 24, 12, 0, 87, 93, 
		    3, 26, 13, 0, 88, 93, 3, 28, 14, 0, 89, 93, 3, 34, 17, 0, 90, 93, 
		    3, 40, 20, 0, 91, 93, 3, 42, 21, 0, 92, 78, 1, 0, 0, 0, 92, 79, 1, 
		    0, 0, 0, 92, 80, 1, 0, 0, 0, 92, 81, 1, 0, 0, 0, 92, 82, 1, 0, 0, 
		    0, 92, 83, 1, 0, 0, 0, 92, 84, 1, 0, 0, 0, 92, 85, 1, 0, 0, 0, 92, 
		    86, 1, 0, 0, 0, 92, 87, 1, 0, 0, 0, 92, 88, 1, 0, 0, 0, 92, 89, 1, 
		    0, 0, 0, 92, 90, 1, 0, 0, 0, 92, 91, 1, 0, 0, 0, 93, 3, 1, 0, 0, 0, 
		    94, 96, 3, 66, 33, 0, 95, 94, 1, 0, 0, 0, 95, 96, 1, 0, 0, 0, 96, 
		    97, 1, 0, 0, 0, 97, 98, 3, 68, 34, 0, 98, 101, 5, 66, 0, 0, 99, 100, 
		    5, 32, 0, 0, 100, 102, 3, 44, 22, 0, 101, 99, 1, 0, 0, 0, 101, 102, 
		    1, 0, 0, 0, 102, 5, 1, 0, 0, 0, 103, 104, 3, 8, 4, 0, 104, 105, 5, 
		    32, 0, 0, 105, 106, 3, 44, 22, 0, 106, 7, 1, 0, 0, 0, 107, 124, 5, 
		    66, 0, 0, 108, 109, 5, 66, 0, 0, 109, 110, 5, 50, 0, 0, 110, 124, 
		    5, 66, 0, 0, 111, 112, 5, 66, 0, 0, 112, 113, 5, 57, 0, 0, 113, 114, 
		    3, 44, 22, 0, 114, 115, 5, 58, 0, 0, 115, 124, 1, 0, 0, 0, 116, 117, 
		    5, 66, 0, 0, 117, 118, 5, 50, 0, 0, 118, 119, 5, 66, 0, 0, 119, 120, 
		    5, 57, 0, 0, 120, 121, 3, 44, 22, 0, 121, 122, 5, 58, 0, 0, 122, 124, 
		    1, 0, 0, 0, 123, 107, 1, 0, 0, 0, 123, 108, 1, 0, 0, 0, 123, 111, 
		    1, 0, 0, 0, 123, 116, 1, 0, 0, 0, 124, 9, 1, 0, 0, 0, 125, 126, 5, 
		    10, 0, 0, 126, 127, 3, 44, 22, 0, 127, 134, 3, 2, 1, 0, 128, 129, 
		    5, 11, 0, 0, 129, 130, 3, 44, 22, 0, 130, 131, 3, 2, 1, 0, 131, 133, 
		    1, 0, 0, 0, 132, 128, 1, 0, 0, 0, 133, 136, 1, 0, 0, 0, 134, 132, 
		    1, 0, 0, 0, 134, 135, 1, 0, 0, 0, 135, 139, 1, 0, 0, 0, 136, 134, 
		    1, 0, 0, 0, 137, 138, 5, 12, 0, 0, 138, 140, 3, 2, 1, 0, 139, 137, 
		    1, 0, 0, 0, 139, 140, 1, 0, 0, 0, 140, 11, 1, 0, 0, 0, 141, 142, 5, 
		    13, 0, 0, 142, 143, 3, 44, 22, 0, 143, 144, 3, 2, 1, 0, 144, 13, 1, 
		    0, 0, 0, 145, 146, 5, 14, 0, 0, 146, 147, 5, 53, 0, 0, 147, 148, 3, 
		    16, 8, 0, 148, 149, 5, 54, 0, 0, 149, 150, 3, 2, 1, 0, 150, 15, 1, 
		    0, 0, 0, 151, 153, 3, 4, 2, 0, 152, 151, 1, 0, 0, 0, 152, 153, 1, 
		    0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 156, 5, 49, 0, 0, 155, 157, 3, 
		    44, 22, 0, 156, 155, 1, 0, 0, 0, 156, 157, 1, 0, 0, 0, 157, 158, 1, 
		    0, 0, 0, 158, 160, 5, 49, 0, 0, 159, 161, 3, 44, 22, 0, 160, 159, 
		    1, 0, 0, 0, 160, 161, 1, 0, 0, 0, 161, 17, 1, 0, 0, 0, 162, 163, 5, 
		    15, 0, 0, 163, 164, 5, 53, 0, 0, 164, 165, 5, 66, 0, 0, 165, 166, 
		    5, 47, 0, 0, 166, 167, 3, 44, 22, 0, 167, 168, 5, 54, 0, 0, 168, 169, 
		    3, 2, 1, 0, 169, 19, 1, 0, 0, 0, 170, 171, 5, 16, 0, 0, 171, 172, 
		    3, 2, 1, 0, 172, 173, 5, 13, 0, 0, 173, 174, 3, 44, 22, 0, 174, 175, 
		    5, 49, 0, 0, 175, 21, 1, 0, 0, 0, 176, 178, 5, 17, 0, 0, 177, 179, 
		    3, 44, 22, 0, 178, 177, 1, 0, 0, 0, 178, 179, 1, 0, 0, 0, 179, 23, 
		    1, 0, 0, 0, 180, 181, 5, 18, 0, 0, 181, 182, 5, 49, 0, 0, 182, 25, 
		    1, 0, 0, 0, 183, 184, 5, 19, 0, 0, 184, 185, 5, 49, 0, 0, 185, 27, 
		    1, 0, 0, 0, 186, 187, 5, 20, 0, 0, 187, 188, 5, 66, 0, 0, 188, 190, 
		    5, 53, 0, 0, 189, 191, 3, 30, 15, 0, 190, 189, 1, 0, 0, 0, 190, 191, 
		    1, 0, 0, 0, 191, 192, 1, 0, 0, 0, 192, 193, 5, 54, 0, 0, 193, 194, 
		    3, 68, 34, 0, 194, 195, 3, 2, 1, 0, 195, 29, 1, 0, 0, 0, 196, 201, 
		    3, 32, 16, 0, 197, 198, 5, 48, 0, 0, 198, 200, 3, 32, 16, 0, 199, 
		    197, 1, 0, 0, 0, 200, 203, 1, 0, 0, 0, 201, 199, 1, 0, 0, 0, 201, 
		    202, 1, 0, 0, 0, 202, 31, 1, 0, 0, 0, 203, 201, 1, 0, 0, 0, 204, 206, 
		    3, 66, 33, 0, 205, 204, 1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 207, 
		    1, 0, 0, 0, 207, 208, 3, 68, 34, 0, 208, 209, 5, 66, 0, 0, 209, 33, 
		    1, 0, 0, 0, 210, 211, 5, 21, 0, 0, 211, 214, 5, 66, 0, 0, 212, 213, 
		    5, 47, 0, 0, 213, 215, 5, 66, 0, 0, 214, 212, 1, 0, 0, 0, 214, 215, 
		    1, 0, 0, 0, 215, 216, 1, 0, 0, 0, 216, 217, 5, 55, 0, 0, 217, 218, 
		    3, 36, 18, 0, 218, 219, 5, 56, 0, 0, 219, 35, 1, 0, 0, 0, 220, 222, 
		    3, 38, 19, 0, 221, 220, 1, 0, 0, 0, 222, 225, 1, 0, 0, 0, 223, 221, 
		    1, 0, 0, 0, 223, 224, 1, 0, 0, 0, 224, 37, 1, 0, 0, 0, 225, 223, 1, 
		    0, 0, 0, 226, 229, 3, 4, 2, 0, 227, 229, 3, 28, 14, 0, 228, 226, 1, 
		    0, 0, 0, 228, 227, 1, 0, 0, 0, 229, 39, 1, 0, 0, 0, 230, 231, 5, 25, 
		    0, 0, 231, 234, 5, 66, 0, 0, 232, 233, 5, 50, 0, 0, 233, 235, 5, 66, 
		    0, 0, 234, 232, 1, 0, 0, 0, 234, 235, 1, 0, 0, 0, 235, 41, 1, 0, 0, 
		    0, 236, 237, 3, 44, 22, 0, 237, 238, 5, 49, 0, 0, 238, 43, 1, 0, 0, 
		    0, 239, 240, 3, 46, 23, 0, 240, 45, 1, 0, 0, 0, 241, 247, 3, 48, 24, 
		    0, 242, 243, 5, 52, 0, 0, 243, 244, 3, 44, 22, 0, 244, 245, 5, 47, 
		    0, 0, 245, 246, 3, 44, 22, 0, 246, 248, 1, 0, 0, 0, 247, 242, 1, 0, 
		    0, 0, 247, 248, 1, 0, 0, 0, 248, 47, 1, 0, 0, 0, 249, 254, 3, 50, 
		    25, 0, 250, 251, 5, 39, 0, 0, 251, 253, 3, 50, 25, 0, 252, 250, 1, 
		    0, 0, 0, 253, 256, 1, 0, 0, 0, 254, 252, 1, 0, 0, 0, 254, 255, 1, 
		    0, 0, 0, 255, 49, 1, 0, 0, 0, 256, 254, 1, 0, 0, 0, 257, 262, 3, 52, 
		    26, 0, 258, 259, 5, 38, 0, 0, 259, 261, 3, 52, 26, 0, 260, 258, 1, 
		    0, 0, 0, 261, 264, 1, 0, 0, 0, 262, 260, 1, 0, 0, 0, 262, 263, 1, 
		    0, 0, 0, 263, 51, 1, 0, 0, 0, 264, 262, 1, 0, 0, 0, 265, 266, 3, 54, 
		    27, 0, 266, 267, 7, 0, 0, 0, 267, 268, 3, 54, 27, 0, 268, 53, 1, 0, 
		    0, 0, 269, 270, 3, 56, 28, 0, 270, 271, 7, 1, 0, 0, 271, 272, 3, 56, 
		    28, 0, 272, 55, 1, 0, 0, 0, 273, 278, 3, 58, 29, 0, 274, 275, 7, 2, 
		    0, 0, 275, 277, 3, 58, 29, 0, 276, 274, 1, 0, 0, 0, 277, 280, 1, 0, 
		    0, 0, 278, 276, 1, 0, 0, 0, 278, 279, 1, 0, 0, 0, 279, 57, 1, 0, 0, 
		    0, 280, 278, 1, 0, 0, 0, 281, 286, 3, 60, 30, 0, 282, 283, 7, 3, 0, 
		    0, 283, 285, 3, 60, 30, 0, 284, 282, 1, 0, 0, 0, 285, 288, 1, 0, 0, 
		    0, 286, 284, 1, 0, 0, 0, 286, 287, 1, 0, 0, 0, 287, 59, 1, 0, 0, 0, 
		    288, 286, 1, 0, 0, 0, 289, 290, 7, 4, 0, 0, 290, 293, 3, 60, 30, 0, 
		    291, 293, 3, 62, 31, 0, 292, 289, 1, 0, 0, 0, 292, 291, 1, 0, 0, 0, 
		    293, 61, 1, 0, 0, 0, 294, 301, 3, 64, 32, 0, 295, 301, 5, 66, 0, 0, 
		    296, 297, 5, 53, 0, 0, 297, 298, 3, 44, 22, 0, 298, 299, 5, 54, 0, 
		    0, 299, 301, 1, 0, 0, 0, 300, 294, 1, 0, 0, 0, 300, 295, 1, 0, 0, 
		    0, 300, 296, 1, 0, 0, 0, 301, 63, 1, 0, 0, 0, 302, 303, 7, 5, 0, 0, 
		    303, 65, 1, 0, 0, 0, 304, 305, 5, 22, 0, 0, 305, 67, 1, 0, 0, 0, 306, 
		    307, 7, 6, 0, 0, 307, 69, 1, 0, 0, 0, 25, 73, 92, 95, 101, 123, 134, 
		    139, 152, 156, 160, 178, 190, 201, 205, 214, 223, 228, 234, 247, 254, 
		    262, 278, 286, 292, 300];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "tobichi_parser.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(73);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 6926537326919149502) !== 0) || (((($_la - 66)) & ~0x3f) === 0 && ((1 << ($_la - 66)) & 31) !== 0)) {
		        	$this->setState(70);
		        	$this->statement();
		        	$this->setState(75);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(76);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_statement);

		    try {
		        $this->setState(92);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(78);
		        	    $this->variableDeclaration();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(79);
		        	    $this->assignmentStatement();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(80);
		        	    $this->ifStatement();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(81);
		        	    $this->whileStatement();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(82);
		        	    $this->forStatement();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(83);
		        	    $this->foreachStatement();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(84);
		        	    $this->doWhileStatement();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(85);
		        	    $this->returnStatement();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(86);
		        	    $this->breakStatement();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(87);
		        	    $this->continueStatement();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(88);
		        	    $this->functionDeclaration();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(89);
		        	    $this->classDeclaration();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(90);
		        	    $this->importStatement();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(91);
		        	    $this->expressionStatement();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function variableDeclaration(): Context\VariableDeclarationContext
		{
		    $localContext = new Context\VariableDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_variableDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_MUTABLE) {
		        	$this->setState(94);
		        	$this->mutable();
		        }
		        $this->setState(97);
		        $this->dataType();
		        $this->setState(98);
		        $this->match(self::T_IDENTIFIER);
		        $this->setState(101);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_ASSIGN) {
		        	$this->setState(99);
		        	$this->match(self::T_ASSIGN);
		        	$this->setState(100);
		        	$this->expression();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignmentStatement(): Context\AssignmentStatementContext
		{
		    $localContext = new Context\AssignmentStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_assignmentStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(103);
		        $this->variableOrField();
		        $this->setState(104);
		        $this->match(self::T_ASSIGN);
		        $this->setState(105);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function variableOrField(): Context\VariableOrFieldContext
		{
		    $localContext = new Context\VariableOrFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_variableOrField);

		    try {
		        $this->setState(123);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(107);
		        	    $this->match(self::T_IDENTIFIER);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(108);
		        	    $this->match(self::T_IDENTIFIER);
		        	    $this->setState(109);
		        	    $this->match(self::T_DOT);
		        	    $this->setState(110);
		        	    $this->match(self::T_IDENTIFIER);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(111);
		        	    $this->match(self::T_IDENTIFIER);
		        	    $this->setState(112);
		        	    $this->match(self::T_OPEN_BRACKET);
		        	    $this->setState(113);
		        	    $this->expression();
		        	    $this->setState(114);
		        	    $this->match(self::T_CLOSE_BRACKET);
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(116);
		        	    $this->match(self::T_IDENTIFIER);
		        	    $this->setState(117);
		        	    $this->match(self::T_DOT);
		        	    $this->setState(118);
		        	    $this->match(self::T_IDENTIFIER);
		        	    $this->setState(119);
		        	    $this->match(self::T_OPEN_BRACKET);
		        	    $this->setState(120);
		        	    $this->expression();
		        	    $this->setState(121);
		        	    $this->match(self::T_CLOSE_BRACKET);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStatement(): Context\IfStatementContext
		{
		    $localContext = new Context\IfStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(125);
		        $this->match(self::T_IF);
		        $this->setState(126);
		        $this->expression();
		        $this->setState(127);
		        $this->statement();
		        $this->setState(134);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(128);
		        		$this->match(self::T_ELSEIF);
		        		$this->setState(129);
		        		$this->expression();
		        		$this->setState(130);
		        		$this->statement(); 
		        	}

		        	$this->setState(136);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx);
		        }
		        $this->setState(139);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(137);
		        	    $this->match(self::T_ELSE);
		        	    $this->setState(138);
		        	    $this->statement();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function whileStatement(): Context\WhileStatementContext
		{
		    $localContext = new Context\WhileStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_whileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(141);
		        $this->match(self::T_WHILE);
		        $this->setState(142);
		        $this->expression();
		        $this->setState(143);
		        $this->statement();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStatement(): Context\ForStatementContext
		{
		    $localContext = new Context\ForStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_forStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(145);
		        $this->match(self::T_FOR);
		        $this->setState(146);
		        $this->match(self::T_OPEN_PAREN);
		        $this->setState(147);
		        $this->forControl();
		        $this->setState(148);
		        $this->match(self::T_CLOSE_PAREN);
		        $this->setState(149);
		        $this->statement();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forControl(): Context\ForControlContext
		{
		    $localContext = new Context\ForControlContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_forControl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4194494) !== 0) || $_la === self::T_IDENTIFIER) {
		        	$this->setState(151);
		        	$this->variableDeclaration();
		        }
		        $this->setState(154);
		        $this->match(self::T_SEMICOLON);
		        $this->setState(156);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 8)) & ~0x3f) === 0 && ((1 << ($_la - 8)) & 8962198447136178179) !== 0)) {
		        	$this->setState(155);
		        	$this->expression();
		        }
		        $this->setState(158);
		        $this->match(self::T_SEMICOLON);
		        $this->setState(160);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 8)) & ~0x3f) === 0 && ((1 << ($_la - 8)) & 8962198447136178179) !== 0)) {
		        	$this->setState(159);
		        	$this->expression();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function foreachStatement(): Context\ForeachStatementContext
		{
		    $localContext = new Context\ForeachStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_foreachStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(162);
		        $this->match(self::T_FOREACH);
		        $this->setState(163);
		        $this->match(self::T_OPEN_PAREN);
		        $this->setState(164);
		        $this->match(self::T_IDENTIFIER);
		        $this->setState(165);
		        $this->match(self::T_COLON);
		        $this->setState(166);
		        $this->expression();
		        $this->setState(167);
		        $this->match(self::T_CLOSE_PAREN);
		        $this->setState(168);
		        $this->statement();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function doWhileStatement(): Context\DoWhileStatementContext
		{
		    $localContext = new Context\DoWhileStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_doWhileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(170);
		        $this->match(self::T_DO);
		        $this->setState(171);
		        $this->statement();
		        $this->setState(172);
		        $this->match(self::T_WHILE);
		        $this->setState(173);
		        $this->expression();
		        $this->setState(174);
		        $this->match(self::T_SEMICOLON);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStatement(): Context\ReturnStatementContext
		{
		    $localContext = new Context\ReturnStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_returnStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(176);
		        $this->match(self::T_RETURN);
		        $this->setState(178);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		            case 1:
		        	    $this->setState(177);
		        	    $this->expression();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStatement(): Context\BreakStatementContext
		{
		    $localContext = new Context\BreakStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_breakStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(180);
		        $this->match(self::T_BREAK);
		        $this->setState(181);
		        $this->match(self::T_SEMICOLON);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStatement(): Context\ContinueStatementContext
		{
		    $localContext = new Context\ContinueStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_continueStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(183);
		        $this->match(self::T_CONTINUE);
		        $this->setState(184);
		        $this->match(self::T_SEMICOLON);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionDeclaration(): Context\FunctionDeclarationContext
		{
		    $localContext = new Context\FunctionDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_functionDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(186);
		        $this->match(self::T_FUNCTION);
		        $this->setState(187);
		        $this->match(self::T_IDENTIFIER);
		        $this->setState(188);
		        $this->match(self::T_OPEN_PAREN);
		        $this->setState(190);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4194494) !== 0) || $_la === self::T_IDENTIFIER) {
		        	$this->setState(189);
		        	$this->parameterList();
		        }
		        $this->setState(192);
		        $this->match(self::T_CLOSE_PAREN);
		        $this->setState(193);
		        $this->dataType();
		        $this->setState(194);
		        $this->statement();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameterList(): Context\ParameterListContext
		{
		    $localContext = new Context\ParameterListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_parameterList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->parameter();
		        $this->setState(201);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_COMMA) {
		        	$this->setState(197);
		        	$this->match(self::T_COMMA);
		        	$this->setState(198);
		        	$this->parameter();
		        	$this->setState(203);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameter(): Context\ParameterContext
		{
		    $localContext = new Context\ParameterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_parameter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(205);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_MUTABLE) {
		        	$this->setState(204);
		        	$this->mutable();
		        }
		        $this->setState(207);
		        $this->dataType();
		        $this->setState(208);
		        $this->match(self::T_IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function classDeclaration(): Context\ClassDeclarationContext
		{
		    $localContext = new Context\ClassDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_classDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(210);
		        $this->match(self::T_CLASS);
		        $this->setState(211);
		        $this->match(self::T_IDENTIFIER);
		        $this->setState(214);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_COLON) {
		        	$this->setState(212);
		        	$this->match(self::T_COLON);
		        	$this->setState(213);
		        	$this->match(self::T_IDENTIFIER);
		        }
		        $this->setState(216);
		        $this->match(self::T_OPEN_BRACE);
		        $this->setState(217);
		        $this->classBody();
		        $this->setState(218);
		        $this->match(self::T_CLOSE_BRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function classBody(): Context\ClassBodyContext
		{
		    $localContext = new Context\ClassBodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_classBody);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(223);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 5243070) !== 0) || $_la === self::T_IDENTIFIER) {
		        	$this->setState(220);
		        	$this->classMember();
		        	$this->setState(225);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function classMember(): Context\ClassMemberContext
		{
		    $localContext = new Context\ClassMemberContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_classMember);

		    try {
		        $this->setState(228);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_NUMBER:
		            case self::T_FLOAT:
		            case self::T_STRING:
		            case self::T_BOOL:
		            case self::T_CHAR:
		            case self::T_ARRAY:
		            case self::T_MUTABLE:
		            case self::T_IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(226);
		            	$this->variableDeclaration();
		            	break;

		            case self::T_FUNCTION:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(227);
		            	$this->functionDeclaration();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function importStatement(): Context\ImportStatementContext
		{
		    $localContext = new Context\ImportStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_importStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(230);
		        $this->match(self::T_IMPORT);
		        $this->setState(231);
		        $this->match(self::T_IDENTIFIER);
		        $this->setState(234);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_DOT) {
		        	$this->setState(232);
		        	$this->match(self::T_DOT);
		        	$this->setState(233);
		        	$this->match(self::T_IDENTIFIER);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionStatement(): Context\ExpressionStatementContext
		{
		    $localContext = new Context\ExpressionStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_expressionStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(236);
		        $this->expression();
		        $this->setState(237);
		        $this->match(self::T_SEMICOLON);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(239);
		        $this->conditionalExpression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function conditionalExpression(): Context\ConditionalExpressionContext
		{
		    $localContext = new Context\ConditionalExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_conditionalExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(241);
		        $this->logicalOrExpression();
		        $this->setState(247);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T_QUESTION) {
		        	$this->setState(242);
		        	$this->match(self::T_QUESTION);
		        	$this->setState(243);
		        	$this->expression();
		        	$this->setState(244);
		        	$this->match(self::T_COLON);
		        	$this->setState(245);
		        	$this->expression();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalOrExpression(): Context\LogicalOrExpressionContext
		{
		    $localContext = new Context\LogicalOrExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_logicalOrExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(249);
		        $this->logicalAndExpression();
		        $this->setState(254);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_OR) {
		        	$this->setState(250);
		        	$this->match(self::T_OR);
		        	$this->setState(251);
		        	$this->logicalAndExpression();
		        	$this->setState(256);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalAndExpression(): Context\LogicalAndExpressionContext
		{
		    $localContext = new Context\LogicalAndExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_logicalAndExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(257);
		        $this->equalityExpression();
		        $this->setState(262);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_AND) {
		        	$this->setState(258);
		        	$this->match(self::T_AND);
		        	$this->setState(259);
		        	$this->equalityExpression();
		        	$this->setState(264);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function equalityExpression(): Context\EqualityExpressionContext
		{
		    $localContext = new Context\EqualityExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_equalityExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(265);
		        $this->relationalExpression();
		        $this->setState(266);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T_EQ || $_la === self::T_NEQ)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(267);
		        $this->relationalExpression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relationalExpression(): Context\RelationalExpressionContext
		{
		    $localContext = new Context\RelationalExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_relationalExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(269);
		        $this->additiveExpression();
		        $this->setState(270);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131941395333120) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(271);
		        $this->additiveExpression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function additiveExpression(): Context\AdditiveExpressionContext
		{
		    $localContext = new Context\AdditiveExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_additiveExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(273);
		        $this->multiplicativeExpression();
		        $this->setState(278);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(274);

		        		$_la = $this->input->LA(1);

		        		if (!($_la === self::T_PLUS || $_la === self::T_MINUS)) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		}
		        		$this->setState(275);
		        		$this->multiplicativeExpression(); 
		        	}

		        	$this->setState(280);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multiplicativeExpression(): Context\MultiplicativeExpressionContext
		{
		    $localContext = new Context\MultiplicativeExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_multiplicativeExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(281);
		        $this->unaryExpression();
		        $this->setState(286);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3758096384) !== 0)) {
		        	$this->setState(282);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3758096384) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(283);
		        	$this->unaryExpression();
		        	$this->setState(288);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryExpression(): Context\UnaryExpressionContext
		{
		    $localContext = new Context\UnaryExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_unaryExpression);

		    try {
		        $this->setState(292);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_PLUS:
		            case self::T_MINUS:
		            case self::T_NOT:
		            case self::T_INCR:
		            case self::T_DECR:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(289);

		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 6917530127555362816) !== 0))) {
		            	$this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(290);
		            	$this->unaryExpression();
		            	break;

		            case self::T_TRUE:
		            case self::T_FALSE:
		            case self::T_NULL:
		            case self::T_OPEN_PAREN:
		            case self::T_IDENTIFIER:
		            case self::T_NUMBER_LITERAL:
		            case self::T_FLOAT_LITERAL:
		            case self::T_STRING_LITERAL:
		            case self::T_CHAR_LITERAL:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(291);
		            	$this->primaryExpression();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primaryExpression(): Context\PrimaryExpressionContext
		{
		    $localContext = new Context\PrimaryExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_primaryExpression);

		    try {
		        $this->setState(300);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_TRUE:
		            case self::T_FALSE:
		            case self::T_NULL:
		            case self::T_NUMBER_LITERAL:
		            case self::T_FLOAT_LITERAL:
		            case self::T_STRING_LITERAL:
		            case self::T_CHAR_LITERAL:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(294);
		            	$this->literal();
		            	break;

		            case self::T_IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(295);
		            	$this->match(self::T_IDENTIFIER);
		            	break;

		            case self::T_OPEN_PAREN:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(296);
		            	$this->match(self::T_OPEN_PAREN);
		            	$this->setState(297);
		            	$this->expression();
		            	$this->setState(298);
		            	$this->match(self::T_CLOSE_PAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(302);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 8)) & ~0x3f) === 0 && ((1 << ($_la - 8)) & 8646911284551614467) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function mutable(): Context\MutableContext
		{
		    $localContext = new Context\MutableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_mutable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(304);
		        $this->match(self::T_MUTABLE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dataType(): Context\DataTypeContext
		{
		    $localContext = new Context\DataTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_dataType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(306);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 190) !== 0) || $_la === self::T_IDENTIFIER)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use tobichi_parser;
	use tobichi_parserListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::EOF, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitProgram($this);
		    }
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_statement;
	    }

	    public function variableDeclaration(): ?VariableDeclarationContext
	    {
	    	return $this->getTypedRuleContext(VariableDeclarationContext::class, 0);
	    }

	    public function assignmentStatement(): ?AssignmentStatementContext
	    {
	    	return $this->getTypedRuleContext(AssignmentStatementContext::class, 0);
	    }

	    public function ifStatement(): ?IfStatementContext
	    {
	    	return $this->getTypedRuleContext(IfStatementContext::class, 0);
	    }

	    public function whileStatement(): ?WhileStatementContext
	    {
	    	return $this->getTypedRuleContext(WhileStatementContext::class, 0);
	    }

	    public function forStatement(): ?ForStatementContext
	    {
	    	return $this->getTypedRuleContext(ForStatementContext::class, 0);
	    }

	    public function foreachStatement(): ?ForeachStatementContext
	    {
	    	return $this->getTypedRuleContext(ForeachStatementContext::class, 0);
	    }

	    public function doWhileStatement(): ?DoWhileStatementContext
	    {
	    	return $this->getTypedRuleContext(DoWhileStatementContext::class, 0);
	    }

	    public function returnStatement(): ?ReturnStatementContext
	    {
	    	return $this->getTypedRuleContext(ReturnStatementContext::class, 0);
	    }

	    public function breakStatement(): ?BreakStatementContext
	    {
	    	return $this->getTypedRuleContext(BreakStatementContext::class, 0);
	    }

	    public function continueStatement(): ?ContinueStatementContext
	    {
	    	return $this->getTypedRuleContext(ContinueStatementContext::class, 0);
	    }

	    public function functionDeclaration(): ?FunctionDeclarationContext
	    {
	    	return $this->getTypedRuleContext(FunctionDeclarationContext::class, 0);
	    }

	    public function classDeclaration(): ?ClassDeclarationContext
	    {
	    	return $this->getTypedRuleContext(ClassDeclarationContext::class, 0);
	    }

	    public function importStatement(): ?ImportStatementContext
	    {
	    	return $this->getTypedRuleContext(ImportStatementContext::class, 0);
	    }

	    public function expressionStatement(): ?ExpressionStatementContext
	    {
	    	return $this->getTypedRuleContext(ExpressionStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitStatement($this);
		    }
		}
	} 

	class VariableDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_variableDeclaration;
	    }

	    public function dataType(): ?DataTypeContext
	    {
	    	return $this->getTypedRuleContext(DataTypeContext::class, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

	    public function mutable(): ?MutableContext
	    {
	    	return $this->getTypedRuleContext(MutableContext::class, 0);
	    }

	    public function T_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_ASSIGN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterVariableDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitVariableDeclaration($this);
		    }
		}
	} 

	class AssignmentStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_assignmentStatement;
	    }

	    public function variableOrField(): ?VariableOrFieldContext
	    {
	    	return $this->getTypedRuleContext(VariableOrFieldContext::class, 0);
	    }

	    public function T_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_ASSIGN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterAssignmentStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitAssignmentStatement($this);
		    }
		}
	} 

	class VariableOrFieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_variableOrField;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_IDENTIFIER);
	    	}

	        return $this->getToken(tobichi_parser::T_IDENTIFIER, $index);
	    }

	    public function T_DOT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_DOT, 0);
	    }

	    public function T_OPEN_BRACKET(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_BRACKET, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function T_CLOSE_BRACKET(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_BRACKET, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterVariableOrField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitVariableOrField($this);
		    }
		}
	} 

	class IfStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_ifStatement;
	    }

	    public function T_IF(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IF, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_ELSEIF(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_ELSEIF);
	    	}

	        return $this->getToken(tobichi_parser::T_ELSEIF, $index);
	    }

	    public function T_ELSE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_ELSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterIfStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitIfStatement($this);
		    }
		}
	} 

	class WhileStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_whileStatement;
	    }

	    public function T_WHILE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_WHILE, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterWhileStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitWhileStatement($this);
		    }
		}
	} 

	class ForStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_forStatement;
	    }

	    public function T_FOR(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FOR, 0);
	    }

	    public function T_OPEN_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_PAREN, 0);
	    }

	    public function forControl(): ?ForControlContext
	    {
	    	return $this->getTypedRuleContext(ForControlContext::class, 0);
	    }

	    public function T_CLOSE_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_PAREN, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterForStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitForStatement($this);
		    }
		}
	} 

	class ForControlContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_forControl;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_SEMICOLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_SEMICOLON);
	    	}

	        return $this->getToken(tobichi_parser::T_SEMICOLON, $index);
	    }

	    public function variableDeclaration(): ?VariableDeclarationContext
	    {
	    	return $this->getTypedRuleContext(VariableDeclarationContext::class, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterForControl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitForControl($this);
		    }
		}
	} 

	class ForeachStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_foreachStatement;
	    }

	    public function T_FOREACH(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FOREACH, 0);
	    }

	    public function T_OPEN_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_PAREN, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

	    public function T_COLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_COLON, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function T_CLOSE_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_PAREN, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterForeachStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitForeachStatement($this);
		    }
		}
	} 

	class DoWhileStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_doWhileStatement;
	    }

	    public function T_DO(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_DO, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

	    public function T_WHILE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_WHILE, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function T_SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterDoWhileStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitDoWhileStatement($this);
		    }
		}
	} 

	class ReturnStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_returnStatement;
	    }

	    public function T_RETURN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_RETURN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterReturnStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitReturnStatement($this);
		    }
		}
	} 

	class BreakStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_breakStatement;
	    }

	    public function T_BREAK(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_BREAK, 0);
	    }

	    public function T_SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterBreakStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitBreakStatement($this);
		    }
		}
	} 

	class ContinueStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_continueStatement;
	    }

	    public function T_CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CONTINUE, 0);
	    }

	    public function T_SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterContinueStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitContinueStatement($this);
		    }
		}
	} 

	class FunctionDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_functionDeclaration;
	    }

	    public function T_FUNCTION(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FUNCTION, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

	    public function T_OPEN_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_PAREN, 0);
	    }

	    public function T_CLOSE_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_PAREN, 0);
	    }

	    public function dataType(): ?DataTypeContext
	    {
	    	return $this->getTypedRuleContext(DataTypeContext::class, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

	    public function parameterList(): ?ParameterListContext
	    {
	    	return $this->getTypedRuleContext(ParameterListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterFunctionDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitFunctionDeclaration($this);
		    }
		}
	} 

	class ParameterListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_parameterList;
	    }

	    /**
	     * @return array<ParameterContext>|ParameterContext|null
	     */
	    public function parameter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParameterContext::class);
	    	}

	        return $this->getTypedRuleContext(ParameterContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_COMMA);
	    	}

	        return $this->getToken(tobichi_parser::T_COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterParameterList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitParameterList($this);
		    }
		}
	} 

	class ParameterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_parameter;
	    }

	    public function dataType(): ?DataTypeContext
	    {
	    	return $this->getTypedRuleContext(DataTypeContext::class, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

	    public function mutable(): ?MutableContext
	    {
	    	return $this->getTypedRuleContext(MutableContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterParameter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitParameter($this);
		    }
		}
	} 

	class ClassDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_classDeclaration;
	    }

	    public function T_CLASS(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLASS, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_IDENTIFIER);
	    	}

	        return $this->getToken(tobichi_parser::T_IDENTIFIER, $index);
	    }

	    public function T_OPEN_BRACE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_BRACE, 0);
	    }

	    public function classBody(): ?ClassBodyContext
	    {
	    	return $this->getTypedRuleContext(ClassBodyContext::class, 0);
	    }

	    public function T_CLOSE_BRACE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_BRACE, 0);
	    }

	    public function T_COLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_COLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterClassDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitClassDeclaration($this);
		    }
		}
	} 

	class ClassBodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_classBody;
	    }

	    /**
	     * @return array<ClassMemberContext>|ClassMemberContext|null
	     */
	    public function classMember(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ClassMemberContext::class);
	    	}

	        return $this->getTypedRuleContext(ClassMemberContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterClassBody($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitClassBody($this);
		    }
		}
	} 

	class ClassMemberContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_classMember;
	    }

	    public function variableDeclaration(): ?VariableDeclarationContext
	    {
	    	return $this->getTypedRuleContext(VariableDeclarationContext::class, 0);
	    }

	    public function functionDeclaration(): ?FunctionDeclarationContext
	    {
	    	return $this->getTypedRuleContext(FunctionDeclarationContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterClassMember($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitClassMember($this);
		    }
		}
	} 

	class ImportStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_importStatement;
	    }

	    public function T_IMPORT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IMPORT, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_IDENTIFIER);
	    	}

	        return $this->getToken(tobichi_parser::T_IDENTIFIER, $index);
	    }

	    public function T_DOT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_DOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterImportStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitImportStatement($this);
		    }
		}
	} 

	class ExpressionStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_expressionStatement;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function T_SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterExpressionStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitExpressionStatement($this);
		    }
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_expression;
	    }

	    public function conditionalExpression(): ?ConditionalExpressionContext
	    {
	    	return $this->getTypedRuleContext(ConditionalExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitExpression($this);
		    }
		}
	} 

	class ConditionalExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_conditionalExpression;
	    }

	    public function logicalOrExpression(): ?LogicalOrExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicalOrExpressionContext::class, 0);
	    }

	    public function T_QUESTION(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_QUESTION, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function T_COLON(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_COLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterConditionalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitConditionalExpression($this);
		    }
		}
	} 

	class LogicalOrExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_logicalOrExpression;
	    }

	    /**
	     * @return array<LogicalAndExpressionContext>|LogicalAndExpressionContext|null
	     */
	    public function logicalAndExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogicalAndExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(LogicalAndExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_OR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_OR);
	    	}

	        return $this->getToken(tobichi_parser::T_OR, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterLogicalOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitLogicalOrExpression($this);
		    }
		}
	} 

	class LogicalAndExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_logicalAndExpression;
	    }

	    /**
	     * @return array<EqualityExpressionContext>|EqualityExpressionContext|null
	     */
	    public function equalityExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EqualityExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(EqualityExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_AND(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_AND);
	    	}

	        return $this->getToken(tobichi_parser::T_AND, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterLogicalAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitLogicalAndExpression($this);
		    }
		}
	} 

	class EqualityExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_equalityExpression;
	    }

	    /**
	     * @return array<RelationalExpressionContext>|RelationalExpressionContext|null
	     */
	    public function relationalExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RelationalExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(RelationalExpressionContext::class, $index);
	    }

	    public function T_EQ(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_EQ, 0);
	    }

	    public function T_NEQ(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_NEQ, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterEqualityExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitEqualityExpression($this);
		    }
		}
	} 

	class RelationalExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_relationalExpression;
	    }

	    /**
	     * @return array<AdditiveExpressionContext>|AdditiveExpressionContext|null
	     */
	    public function additiveExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AdditiveExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(AdditiveExpressionContext::class, $index);
	    }

	    public function T_LT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_LT, 0);
	    }

	    public function T_LTE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_LTE, 0);
	    }

	    public function T_GT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_GT, 0);
	    }

	    public function T_GTE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_GTE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterRelationalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitRelationalExpression($this);
		    }
		}
	} 

	class AdditiveExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_additiveExpression;
	    }

	    /**
	     * @return array<MultiplicativeExpressionContext>|MultiplicativeExpressionContext|null
	     */
	    public function multiplicativeExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MultiplicativeExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(MultiplicativeExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_PLUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_PLUS);
	    	}

	        return $this->getToken(tobichi_parser::T_PLUS, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_MINUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_MINUS);
	    	}

	        return $this->getToken(tobichi_parser::T_MINUS, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterAdditiveExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitAdditiveExpression($this);
		    }
		}
	} 

	class MultiplicativeExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_multiplicativeExpression;
	    }

	    /**
	     * @return array<UnaryExpressionContext>|UnaryExpressionContext|null
	     */
	    public function unaryExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_MULT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_MULT);
	    	}

	        return $this->getToken(tobichi_parser::T_MULT, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_DIV(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_DIV);
	    	}

	        return $this->getToken(tobichi_parser::T_DIV, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_MODULO(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(tobichi_parser::T_MODULO);
	    	}

	        return $this->getToken(tobichi_parser::T_MODULO, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterMultiplicativeExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitMultiplicativeExpression($this);
		    }
		}
	} 

	class UnaryExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_unaryExpression;
	    }

	    public function unaryExpression(): ?UnaryExpressionContext
	    {
	    	return $this->getTypedRuleContext(UnaryExpressionContext::class, 0);
	    }

	    public function T_PLUS(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_PLUS, 0);
	    }

	    public function T_MINUS(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_MINUS, 0);
	    }

	    public function T_NOT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_NOT, 0);
	    }

	    public function T_INCR(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_INCR, 0);
	    }

	    public function T_DECR(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_DECR, 0);
	    }

	    public function primaryExpression(): ?PrimaryExpressionContext
	    {
	    	return $this->getTypedRuleContext(PrimaryExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterUnaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitUnaryExpression($this);
		    }
		}
	} 

	class PrimaryExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_primaryExpression;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

	    public function T_OPEN_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_OPEN_PAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function T_CLOSE_PAREN(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CLOSE_PAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterPrimaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitPrimaryExpression($this);
		    }
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_literal;
	    }

	    public function T_NUMBER_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_NUMBER_LITERAL, 0);
	    }

	    public function T_FLOAT_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FLOAT_LITERAL, 0);
	    }

	    public function T_STRING_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_STRING_LITERAL, 0);
	    }

	    public function T_CHAR_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CHAR_LITERAL, 0);
	    }

	    public function T_TRUE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_TRUE, 0);
	    }

	    public function T_FALSE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FALSE, 0);
	    }

	    public function T_NULL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_NULL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitLiteral($this);
		    }
		}
	} 

	class MutableContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_mutable;
	    }

	    public function T_MUTABLE(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_MUTABLE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterMutable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitMutable($this);
		    }
		}
	} 

	class DataTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return tobichi_parser::RULE_dataType;
	    }

	    public function T_NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_NUMBER, 0);
	    }

	    public function T_FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_FLOAT, 0);
	    }

	    public function T_STRING(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_STRING, 0);
	    }

	    public function T_BOOL(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_BOOL, 0);
	    }

	    public function T_CHAR(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_CHAR, 0);
	    }

	    public function T_ARRAY(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_ARRAY, 0);
	    }

	    public function T_IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(tobichi_parser::T_IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->enterDataType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof tobichi_parserListener) {
			    $listener->exitDataType($this);
		    }
		}
	} 
}