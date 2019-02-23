<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _ldc2_w implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $cpInfo = $this->getCpInfo();

        $data = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $this->pushStack($data->getBytes());    
        
    }

}   
