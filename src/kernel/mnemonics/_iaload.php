<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _iaload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $this->pushStack($arrayref[$index]);

    }

}   
