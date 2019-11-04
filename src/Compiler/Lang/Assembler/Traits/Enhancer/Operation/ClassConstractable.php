<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Utilities\ArrayTool;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait ClassConstractable
{
    public function assembleClassConstructor(
        string $classPath,
        string $descriptor,
        bool $returnClass = true,
        Operation ...$arguments
    ): array {
        $this->getEnhancedConstantPool()
            ->addClass(
                $classPath
            )
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

        ArrayTool::concat(
            $operations,
            ...$arguments
        );

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
