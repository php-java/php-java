<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\StatementCoordinatorInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\CoordinateStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Short;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Expr\Assign $node
 */
class PostIncrementExpressionAssembler extends AbstractAssembler implements StatementCoordinatorInterface, AssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;

    public function assemble(): void
    {
        $name = $this->node->var->name;

        [$localStorageNumber, [$classType]] = $this->getStore()
            ->get(
                $name
            );

        switch ($classType) {
            case _Byte::class:
            case _Short::class:
            case _Int::class:
                $this->getOperation()
                    ->add(
                        OpCode::_iinc,
                        [
                            [
                                Uint8::class,
                                $localStorageNumber,
                            ],
                            [
                                Uint8::class,
                                1,
                            ],
                        ]
                    );
                break;
            default:
                throw new CoordinateStructureException(
                    'Unsupported increase a value: ' . $classType
                );
        }
    }
}
