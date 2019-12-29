<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _getstatic extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->pushToOperandStackByType(
            $this->getReturnType(),
            $this->getClassName()
        );
    }
}
