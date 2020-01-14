<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _astore_1 extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->accumulator
            ->setToLocal(
                1,
                $this->accumulator
                    ->popFromOperandStack()
            );
    }
}
