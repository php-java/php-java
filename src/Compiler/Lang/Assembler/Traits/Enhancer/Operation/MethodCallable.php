<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait MethodCallable
{
    public function assembleCallMethodOperations(
        string $classPath,
        string $methodName,
        string $descriptor
    ): array {
        // Register required methods
        $this->getEnhancedConstantPool()
            ->addClass($classPath)
            ->addMethodref(
                $classPath,
                $methodName,
                $descriptor
            );

        $operations = [];

        // Call a method
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_invokevirtual,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findMethod(
                        $classPath,
                        $methodName,
                        $descriptor
                    )
            )
        );

        return $operations;
    }
}
