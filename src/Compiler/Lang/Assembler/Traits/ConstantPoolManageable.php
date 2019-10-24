<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Exceptions\AssembleStructureException;

trait ConstantPoolManageable
{
    protected $constantPool;
    protected $constantPoolFinder;

    public function setConstantPool(ConstantPool $constantPool): self
    {
        $this->constantPool = $constantPool;
        return $this;
    }

    public function setConstantPoolFinder(ConstantPoolFinder $constantPoolFinder): self
    {
        $this->constantPoolFinder = $constantPoolFinder;
        return $this;
    }

    public function getConstantPool(): ConstantPool
    {
        if (!isset($this->constantPool)) {
            throw new AssembleStructureException(
                'The ConstantPool is not set. ' .
                'You must to set the ConstantPool.'
            );
        }
        return $this->constantPool;
    }

    public function getConstantPoolFinder(): ConstantPoolFinder
    {
        if (!isset($this->constantPoolFinder)) {
            throw new AssembleStructureException(
                'The ConstantPoolFinder is not set. ' .
                'You must to set the ConstantPoolFinder.'
            );
        }
        return $this->constantPoolFinder;
    }
}
