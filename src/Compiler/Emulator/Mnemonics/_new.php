<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _new extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->pushToOperandStackByType(
            'class',
            $this
                ->operation
                ->getOperand(0)
                ->getValue()
                ->getArguments()[0]
        );
    }
}
