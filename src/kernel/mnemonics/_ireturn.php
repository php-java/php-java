<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _ireturn implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /***
     * return an integer from a method
     */
    public function execute(): void
    {
        return new JavaTypeInt($this->getStack());
    }
}
