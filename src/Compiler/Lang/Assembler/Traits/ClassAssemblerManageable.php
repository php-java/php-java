<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Lang\Assembler\ClassAssembler;

trait ClassAssemblerManageable
{
    protected $classAssembler;

    public function setClassAssembler(?ClassAssembler $methodAssembler): self
    {
        $this->classAssembler = $methodAssembler;
        return $this;
    }

    public function getClassAssembler(): ?ClassAssembler
    {
        return $this->classAssembler;
    }
}
