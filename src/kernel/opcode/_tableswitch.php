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

        $paddingData = $this->readByte() + $this->readByte() + $this->readByte();

        $offsets = array();

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
