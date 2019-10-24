<?php
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Kernel\Maps\VerificationTypeTag;

class _ior extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->accumulator->popFromOperandStack();
        $this->accumulator->popFromOperandStack();
        $this->accumulator->pushToOperandStack(
            [VerificationTypeTag::ITEM_Integer]
        );
    }
}
