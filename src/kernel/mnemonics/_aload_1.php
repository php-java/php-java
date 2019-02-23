<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aload_1 implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a reference onto the stack from local variable 1
     */
    public function execute(): void
    {
        $this->pushStack($this->getLocalstorage(1));
    }
}
