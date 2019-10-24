<?php
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _ifne extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->accumulator
            ->popFromOperandStack();

        $this->addFrame();
    }
}
