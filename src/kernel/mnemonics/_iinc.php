<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _iinc implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {        
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $const = $this->getByteCodeStream()->readByte();

        $this->setLocalstorage($index, $this->getLocalstorage($index) + $const);

    }

}   
