<?php
namespace PHPJava\Compiler\Emulator\Mnemonics;

class _goto extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->addFrame();
    }
}
