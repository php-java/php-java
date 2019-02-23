<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _laload implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a long from an array
     */
    public function execute(): void
    {    
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);
        
    }

}   
