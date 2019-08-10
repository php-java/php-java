<?php
namespace PHPJava\Kernel\Mnemonics;

interface OperationInterface
{
    public function getOperands(): ?Operands;

    public function execute(): void;

    public function returnValue();
}
