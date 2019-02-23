<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _ifne implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $offset = $this->getByteCodeStream()->readShort();

        $operand = $this->getStack();

        if ($operand != 0) {

            $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);

        }
        
    }

}   
