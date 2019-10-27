<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait AssignableFromNode
{
    private function assembleAssignFromNode(Node $expression): array
    {
        /**
         * @var \PhpParser\Node\Expr\Assign $expression
         */
        $name = $expression->var->name;
        $value = $expression->expr;

        $operations = [];
        $expressionTypes = [];

        $expressions = $this->bindParameters(ExpressionProcessor::factory())
            ->execute(
                [$value],
                function (array &$operations, string $nodeType, ?string $classType) use (&$expressionTypes) {
                    if ($nodeType === \PhpParser\Node\Expr\BinaryOp\Concat::class || $classType === null) {
                        return;
                    }
                    $expressionTypes[] = $classType;
                }
            );

        $localVariableAssignOperation = $this->assembleAssignVariable(
            $name,
            current($expressionTypes)
        );

        ArrayTool::concat(
            $operations,
            ...$expressions,
            ...$localVariableAssignOperation
        );

        return $operations;
    }
}
