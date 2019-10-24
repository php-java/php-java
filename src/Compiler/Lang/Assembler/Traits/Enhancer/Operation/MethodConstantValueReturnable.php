<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Bundler\Packages\AbstractPackageBundler;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method AbstractPackageBundler getBundler()
 */
trait MethodConstantValueReturnable
{
    public function assembleSimpleMethodConstantValueReturn($value)
    {
        $returnOperation = null;

        $operations = [];

        if (is_string($value)) {
            $this->getEnhancedConstantPool()
                ->addString($value);

            $returnOperation = OpCode::_areturn;

            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                OpCode::_ldc,
                Operand::factory(
                    Uint8::class,
                    $this->getBundler()
                        ->getConstantPoolFinder()
                        ->find(
                            StringInfo::class,
                            $value
                        )
                )
            );
        } elseif (is_int($value)) {
            $returnOperation = OpCode::_ireturn;
            array_push(
                $operations,
                ...$this->assembleLoadNumber(
                    $value
                )
            );
        } else {
            throw new AssembleStructureException(
                'Unknown return type: ' . gettype($value)
            );
        }

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            $returnOperation
        );

        return $operations;
    }
}
