<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _dup extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $stack = $this->accumulator->popFromOperandStack();
        $this->accumulator->pushToOperandStack($stack);
        $this->accumulator->pushToOperandStack($stack);
    }
}
