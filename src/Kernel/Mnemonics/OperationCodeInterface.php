<?php
namespace PHPJava\Kernel\Mnemonics;

interface OperationCodeInterface
{
    public function getOperands(): ?Operands;

    public function execute(): void;

    public function returnValue();

    public function isExecuted(): bool;
}
