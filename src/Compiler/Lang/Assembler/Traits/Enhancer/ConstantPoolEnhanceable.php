<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer;

use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;

trait ConstantPoolEnhanceable
{
    public function getEnhancedConstantPool(): ConstantPoolEnhancer
    {
        return ConstantPoolEnhancer::factory(
            $this->getConstantPool(),
            $this->getConstantPoolFinder()
        );
    }
}
