<?php
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Exceptions\AssembleStructureException;

class _return extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        if (count($this->accumulator->getStacks()) > 0) {
            throw new AssembleStructureException(
                'Operand Stack is not empty.'
            );
        }
    }
}
