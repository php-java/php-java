<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\StatementAssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Short;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Expr\Assign $node
 */
class PostDecrementExpressionAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;

    public function assemble(): array
    {
        $operations = [];
        $name = $this->node->var->name;

        [$localStorageNumber, $classType] = $this->getStore()->get($name);

        switch ($classType) {
            case _Byte::class:
            case _Short::class:
            case _Int::class:
                $operations[] = Operation::create(
                    OpCode::_iinc,
                    Operand::factory(
                        Uint8::class,
                        $localStorageNumber
                    ),
                    Operand::factory(
                        Uint8::class,
                        -1
                    )
                );
                break;
            default:
                throw new AssembleStructureException(
                    'Unsupported decrease a value: ' . $classType
                );
        }

        return $operations;
    }
}
