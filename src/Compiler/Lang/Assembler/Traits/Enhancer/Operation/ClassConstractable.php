<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait ClassConstractable
{
    public function assembleClassConstructor(string $classPath, string $descriptor, bool $returnClass, ...$arguments)
    {
        $this->getEnhancedConstantPool()
            ->addMethodref(
                $classPath,
                '<init>',
                $descriptor
            );

        // Add instantiate class
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_new,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findClass(
                        $classPath
                    )
            )
        );

        if ($returnClass === true) {
            // Dup a class
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                OpCode::_dup
            );
        }

        if (!empty($arguments)) {
            array_push(
                $operations,
                ...$arguments
            );
        }

        // Call <init>
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_invokespecial,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findMethod(
                        $classPath,
                        '<init>',
                        $descriptor
                    )
            )
        );

        return $operations;
    }
}
