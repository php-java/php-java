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
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Short;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait PostDecrementableFromNode
{
    private function assemblePostDecFromNode(Node $expression): array
    {
        /**
         * @var \PhpParser\Node\Expr\PostDec $expression
         */
        $operations = [];
        $name = $expression->var->name;

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
    }
}
