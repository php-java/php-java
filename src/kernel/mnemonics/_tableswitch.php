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
        $this->read(4 - ($this->getOffset()) % 4);

        $offsets = [];
        $offsets['default'] = $this->readInt();
        $lowByte = $this->readInt();
        $highByte = $this->readInt();
        $count = $highByte - $lowByte + 1;

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
