<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _tableswitch implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $key = $this->getStack();

        // padding data
        $this->read(3);

        $offsets = [];
        $offsets['default'] = $this->readInt();
        $lowByte = $this->readInt();
        $highByte = $this->readInt();

        var_dump($lowByte, $highByte, $offsets);exit();

        for ($i = $lowByte; $i <= $highByte; $i++) {
            $offsets[$i] = $this->readInt();
        }

        var_dump($offsets, $lowByte, $highByte);

        if (isset($offsets[$key])) {

            // goto PC
            $this->setOffset($this->getPointer() + $offsets[$key]);
            return;
        }


        // goto default
        $this->setOffset($this->getPointer() + $offsets['default']);
    }
}
