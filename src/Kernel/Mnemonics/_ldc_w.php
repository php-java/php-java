<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Structures\_Integer;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;

final class _ldc_w implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $data = $cpInfo[$this->readUnsignedShort()];

        $value = null;

        if ($data instanceof _String) {
            $value = $cpInfo[$data->getStringIndex()];

            if ($value instanceof _Utf8) {
                $value = $value->getStringObject();
            }
        } elseif (($data instanceof _Integer)) {
            $value = _Int::get($data->getBytes());
        } elseif ($data instanceof _Float) {
            $value = \PHPJava\Kernel\Types\_Float::get($data->getBytes());
        } else {
            $value = $cpInfo[$data->getStringIndex()];
        }

        $this->pushToOperandStack($value);
    }
}
