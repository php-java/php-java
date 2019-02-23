<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

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
        
        $this->setLocalstorage($index, BinaryTool::convertDoubleToIEEE754($value));
        
    }

}   
