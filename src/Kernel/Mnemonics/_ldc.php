<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_Float;
use PHPJava\Kernel\Structures\_Integer;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\BinaryTool;

final class _ldc implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();

        $data = $cpInfo[$this->readUnsignedByte()];

        $value = null;

        if ($data instanceof _String) {
            $value = $cpInfo[$data->getStringIndex()];

            if ($value instanceof _Utf8) {
                $value = new \PHPJava\Imitation\java\lang\_String($value);
            }
        } elseif (($data instanceof _Integer) || ($data instanceof _Float)) {
            $value = $data->getBytes();
        } else {
            $value = $cpInfo[$data->getStringIndex()];
        }

        $this->pushToOperandStack($value);
    }
}
