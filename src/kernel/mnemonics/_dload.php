<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _dload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a double value from a local variable #index
     */
    public function execute(): void
    {
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->pushStack($this->getLocalstorage($index));
    }
}
