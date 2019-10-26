<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
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

        $expressions = ExpressionProcessor::factory()
            ->setStore($this->getStore())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setNamespace($this->getNamespace())
            ->setOperation($this->getOperation())
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

        array_push(
            $operations,
            ...$expressions,
            ...$localVariableAssignOperation
        );

        return $operations;
    }
}
