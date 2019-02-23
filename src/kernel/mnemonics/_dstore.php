<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _dstore implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * store a double value into a local variable #index
     */
    public function execute(): void
    {    
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $value = $this->getStack();
        
        $this->setLocalstorage($index, BinaryTools::convertDoubleToIEEE754($value));
        
    }

}   
