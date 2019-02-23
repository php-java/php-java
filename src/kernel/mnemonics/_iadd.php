<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _iadd implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $leftValue = $this->getStack();
        $rightValue = $this->getStack();
        
        $this->pushStack(BinaryTools::add($leftValue, $rightValue, 4));

    }

}
