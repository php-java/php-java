<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _arraylength implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $arrayref = $this->getStack();
        
        $this->pushStack(sizeof($arrayref));

    }

}   
