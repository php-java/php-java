<?php
namespace PHPJava\Kernel\Mnemonics;

interface OperationCodeInterface
{
    public function getOperands(): ?Operands;

    public function execute(): void;

    public function returnValue();

    public function isExecuted(): bool;

    public function isStackingOperation(): bool;

    public function getName(): string;

    public function getCode(): int;

    public function beforeExecute(): void;

    public function afterExecute(): void;

    public function getPoppedOperandStacks(): array;

    public function getPushedOperandStacks(): array;
}
