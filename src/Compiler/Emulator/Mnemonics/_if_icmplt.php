<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _if_icmplt extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->accumulator
            ->popFromOperandStack();
        $this->accumulator
            ->popFromOperandStack();

        $this->addFrame();
    }
}
