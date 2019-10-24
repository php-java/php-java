<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Statements\StatementAssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Calculatable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Castable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\ClassConstractable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Conditionable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\StringConcatable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PhpParser\Node;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Expr\Assign $node
 */
class AssignExpressionAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;
    use NumberLoadable;
    use StringConcatable;
    use ClassConstractable;
    use MethodCallable;
    use Castable;
    use Calculatable;
    use Conditionable;

    public function assemble(): array
    {
        $name = $this->node->var->name;
        $value = $this->node->expr;

        $operations = [];
        $expressionTypes = [];

        $expressions = ExpressionProcessor::factory()
            ->setStore($this->getStore())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
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
