<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\ParameterServiceInterface;
use PHPJava\Compiler\Lang\Assembler\Processors\AbstractProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait Bindable
{
    /**
     * @param AbstractAssembler|AbstractProcessor $from
     * @return AbstractAssembler|AbstractProcessor|ParameterServiceInterface
     */
    protected function bindParameters(ParameterServiceInterface $from): ParameterServiceInterface
    {
        return $from
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore());
    }
}
