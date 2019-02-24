<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _tableswitch implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $key = $this->getStack();

        // padding data
        $paddingData = 4 - (($this->getOffset()) % 4);
        if ($paddingData != 4) {
            $this->read($paddingData);
        }

        $offsets = [];
        $offsets['default'] = $this->readInt();
        $lowByte = $this->readInt();
        $highByte = $this->readInt();
        for ($i = $lowByte; $i <= $highByte; $i++) {
            $offsets[$i] = $this->readInt();
        }

        if (isset($offsets[$key])) {

            // goto PC
            $this->setOffset($this->getPointer() + $offsets[$key]);
            return;
        }


        // goto default
        $this->setOffset($this->getPointer() + $offsets['default']);
    }
}
