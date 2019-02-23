<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _daload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a double from an array
     */
    public function execute(): void
    {
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);
    }
}
