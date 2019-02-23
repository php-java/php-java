<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a reference onto the stack from a local variable #index
     */
    public function execute(): void
    {
        $index = $this->getByteCodeStream()->readByte();

        $this->pushStack($this->getLocalstorage($index));
    }
}
