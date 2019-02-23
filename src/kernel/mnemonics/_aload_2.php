<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _aload_2 implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a reference onto the stack from local variable 2
     */
    public function execute(): void
    {
        $this->pushStack($this->getLocalstorage(2));
        
    }

}   
