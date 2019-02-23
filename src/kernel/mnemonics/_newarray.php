<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _newarray implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $atype = $this->getByteCodeStream()->readUnsignedByte();
        $count = $this->getStack();
        
        // need reference
        $ref = new ArrayIterator(array_fill(0, $count, null));
        $this->pushStackByReference($ref);
        

    }

}   
