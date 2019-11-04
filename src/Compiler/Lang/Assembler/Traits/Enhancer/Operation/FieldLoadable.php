<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait FieldLoadable
{
    public function assembleLoadStaticField(string $class, string $fieldName, string $signature): array
    {
        $operations = [];

        $operations[] = Operation::create(
            OpCode::_getstatic,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findField(
                        $class,
                        $fieldName,
                        (new Descriptor())
                            ->addArgument($signature)
                            ->make()
                    )
            )
        );

        return $operations;
    }
}
