<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Lang\Assembler\MethodAssembler;

trait MethodAssemblerManageable
{
    protected $methodAssembler;

    public function setMethodAssembler(?MethodAssembler $methodAssembler): self
    {
        $this->methodAssembler = $methodAssembler;
        return $this;
    }

    public function getMethodAssembler(): ?MethodAssembler
    {
        return $this->methodAssembler;
    }
}
