<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _iastore implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $data = $this->getStack();
        $arrayref = $this->getStack();
        $value = $this->getStack();
        
        $value[$arrayref] = $data;
    }
}
