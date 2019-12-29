<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Short_;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait PostIncrementableFromNode
{
    private function assemblePostIncFromNode(Node $expression): array
    {
        /**
         * @var \PhpParser\Node\Expr\PostInc $expression
         */
        $operations = [];
        $name = $expression->var->name;

        [$localStorageNumber, $classType] = $this->getStore()
            ->get(
                $name
            );

        switch ($classType) {
            case Byte_::class:
            case Short_::class:
            case Int_::class:
                $operations[] = Operation::create(
                    OpCode::_iinc,
                    Operand::factory(
                        Uint8::class,
                        $localStorageNumber
                    ),
                    Operand::factory(
                        Uint8::class,
                        1
                    )
                );
                break;
            default:
                throw new AssembleStructureException(
                    'Unsupported increase a value: ' . $classType
                );
        }

        return $operations;
    }
}
