<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _goto implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $offset = $this->getByteCodeStream()->readShort();

        $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);
    }
}
