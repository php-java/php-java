<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _lload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $index = $this->getByteCodeStream()->readUnsignedByte();

        $this->pushStack($this->getLocalstorage($index));

    }

}
