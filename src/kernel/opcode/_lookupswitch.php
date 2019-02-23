<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _lookupswitch implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $key = $this->getStack();

        $paddingData = $this->getByteCodeStream()->readByte() + $this->getByteCodeStream()->readByte() + $this->getByteCodeStream()->readByte();

        $offsets = array();

        $offsets['default'] = $this->getByteCodeStream()->readInt();
        $switchSize = $this->getByteCodeStream()->readUnsignedInt();


        for ($i = 0; $i < $switchSize; $i++) {
            $label = $this->getByteCodeStream()->readInt();

            $offsets[(string) $label] = $this->getByteCodeStream()->readInt();
        }

        if (isset($offsets[$key])) {

            // goto PC
            $this->getByteCodeStream()->setOffset($this->getPointer() + $offsets[$key]);
            return;
        }

        // goto default
        $this->getByteCodeStream()->setOffset($this->getPointer() + $offsets['default']);
    }
}
