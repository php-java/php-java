<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\StatementCoordinatorInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberStorable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\CoordinateStructureException;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Expr\Assign $node
 */
class AssignExpressionAssembler extends AbstractAssembler implements StatementCoordinatorInterface, AssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;
    use NumberStorable;

    public function assemble(): void
    {
        $name = $this->node->var->name;
        $value = $this->node->expr;

        switch (get_class($value)) {
            case \PhpParser\Node\Scalar\String_::class:
                /**
                 * @var \PhpParser\Node\Scalar\String_ $value
                 */
                $value = (string) $value->value;
                break;
            case \PhpParser\Node\Scalar\LNumber::class:
                /**
                 * @var \PhpParser\Node\Scalar\LNumber $value
                 */
                $value = (int) $value->value;
                break;
            default:
                throw new CoordinateStructureException(
                    'Unsupported the assign expression: ' . get_class($value)
                );
        }

        $localVariableAssignOperation = $this->assembleAssignVariable(
            $name,
            $value
        );

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
