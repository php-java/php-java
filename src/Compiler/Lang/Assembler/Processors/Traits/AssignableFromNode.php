<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\ReferenceCounter;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ReferenceCounter getReferenceCounter()
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

        $type = current($expressionTypes);

        $localVariableAssignOperation = $this->assembleAssignVariable(
            $name,
            $type
        );

        ArrayTool::concat(
            $operations,
            ...$expressions,
            ...$localVariableAssignOperation
        );

        return $operations;
    }
}
