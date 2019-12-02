<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Lang\Assembler\ClassAssemblerInterface;

trait ClassAssemblerManageable
{
    protected $classAssembler;

    public function setClassAssembler(?ClassAssemblerInterface $methodAssembler): self
    {
        $this->classAssembler = $methodAssembler;
        return $this;
    }

    public function getClassAssembler(): ?ClassAssemblerInterface
    {
        return $this->classAssembler;
    }
}
