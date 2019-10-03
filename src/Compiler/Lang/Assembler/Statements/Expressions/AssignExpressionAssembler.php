<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\StatementCoordinatorInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Castable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\ClassConstractable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\StringConcatable;
use PHPJava\Compiler\Lang\Assembler\Traits\ExpressionParseable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Packages\java\lang\_String;
use PhpParser\Node;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Expr\Assign $node
 */
class AssignExpressionAssembler extends AbstractAssembler implements StatementCoordinatorInterface, AssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;
    use NumberLoadable;
    use ExpressionParseable;
    use StringConcatable;
    use ClassConstractable;
    use MethodCallable;
    use Castable;

    public function assemble(): void
    {
        $name = $this->node->var->name;
        $value = $this->node->expr;

        $expressionTypes = [];
        $expressions = $this->parseExpression(
            [$value],
            function (string $classType, $operations) use (&$expressionTypes) {
                $expressionTypes[] = $classType;
            }
        );

        $localVariableAssignOperation = $this->assembleAssignVariable(
            $name,
            count($expressionTypes) > 1
                ? _String::class
                : current($expressionTypes)
        );

        $operations = count($expressionTypes) > 1
            ? $this->assembleConcatStringOperation(...$expressions)
            : $expressions;

        foreach ($operations as $operation) {
            /**
             * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation $operation
             */
            $this->getOperation()
                ->add(
                    $operation->getOpCode(),
                    $operation->getOperands()
                );
        }

        foreach ($localVariableAssignOperation as $operation) {
            /**
             * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation $operation
             */
            $this->getOperation()
                ->add(
                    $operation->getOpCode(),
                    $operation->getOperands()
                );
        }
    }
}
