<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait OperationCalculatableFromNode
{
    private function assembleCalculateOperationFromNode(Node $left, Node $right, int $calculateOpCode, ?callable $callback): array
    {
        //
        // Right operator.
        $operations = [];
        ArrayTool::concat(
            $operations,
            ...$this->execute(
                [
                    // Left operator.
                    $left,
                ],
                $callback
            ),
            ...$this->execute(
                [
                    // Left operator.
                    $right,
                ],
                $callback
            ),
            ...[
                // Calculate operation
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    $calculateOpCode
                ),
            ]
        );
        return $operations;
    }
}
