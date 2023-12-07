<?php

/*
 * Generated from tobichi_parser.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see tobichi_parser}.
 */
interface tobichi_parserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::variableDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableDeclaration(Context\VariableDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::variableDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableDeclaration(Context\VariableDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::variableOrField()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableOrField(Context\VariableOrFieldContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::variableOrField()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableOrField(Context\VariableOrFieldContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::forStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterForStatement(Context\ForStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::forStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitForStatement(Context\ForStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::forControl()}.
	 * @param $context The parse tree.
	 */
	public function enterForControl(Context\ForControlContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::forControl()}.
	 * @param $context The parse tree.
	 */
	public function exitForControl(Context\ForControlContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::foreachStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterForeachStatement(Context\ForeachStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::foreachStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitForeachStatement(Context\ForeachStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::doWhileStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDoWhileStatement(Context\DoWhileStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::doWhileStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDoWhileStatement(Context\DoWhileStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::returnStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStatement(Context\ReturnStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::returnStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStatement(Context\ReturnStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::breakStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterBreakStatement(Context\BreakStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::breakStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitBreakStatement(Context\BreakStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::continueStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterContinueStatement(Context\ContinueStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::continueStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitContinueStatement(Context\ContinueStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::functionDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::functionDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterList(Context\ParameterListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::parameterList()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterList(Context\ParameterListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter(Context\ParameterContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter(Context\ParameterContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::classDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterClassDeclaration(Context\ClassDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::classDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitClassDeclaration(Context\ClassDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::classBody()}.
	 * @param $context The parse tree.
	 */
	public function enterClassBody(Context\ClassBodyContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::classBody()}.
	 * @param $context The parse tree.
	 */
	public function exitClassBody(Context\ClassBodyContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::classMember()}.
	 * @param $context The parse tree.
	 */
	public function enterClassMember(Context\ClassMemberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::classMember()}.
	 * @param $context The parse tree.
	 */
	public function exitClassMember(Context\ClassMemberContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::importStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterImportStatement(Context\ImportStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::importStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitImportStatement(Context\ImportStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::expressionStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionStatement(Context\ExpressionStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::expressionStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionStatement(Context\ExpressionStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::conditionalExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterConditionalExpression(Context\ConditionalExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::conditionalExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitConditionalExpression(Context\ConditionalExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::logicalOrExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalOrExpression(Context\LogicalOrExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::logicalOrExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalOrExpression(Context\LogicalOrExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::logicalAndExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalAndExpression(Context\LogicalAndExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::logicalAndExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalAndExpression(Context\LogicalAndExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::equalityExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualityExpression(Context\EqualityExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::equalityExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualityExpression(Context\EqualityExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::relationalExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterRelationalExpression(Context\RelationalExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::relationalExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitRelationalExpression(Context\RelationalExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::additiveExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterAdditiveExpression(Context\AdditiveExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::additiveExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitAdditiveExpression(Context\AdditiveExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::multiplicativeExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterMultiplicativeExpression(Context\MultiplicativeExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::multiplicativeExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitMultiplicativeExpression(Context\MultiplicativeExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::unaryExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::unaryExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::primaryExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryExpression(Context\PrimaryExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::primaryExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryExpression(Context\PrimaryExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::mutable()}.
	 * @param $context The parse tree.
	 */
	public function enterMutable(Context\MutableContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::mutable()}.
	 * @param $context The parse tree.
	 */
	public function exitMutable(Context\MutableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see tobichi_parser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterDataType(Context\DataTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see tobichi_parser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitDataType(Context\DataTypeContext $context): void;
}