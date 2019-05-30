<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Packages\java\lang\UnsupportedOperationException;

final class _ldc2_w implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $data = $cpInfo[$this->readUnsignedShort()];
        $value = null;

        if (($data instanceof \PHPJava\Kernel\Structures\LongInfo)) {
            $value = _Long::get($data->getBytes());
        } elseif ($data instanceof \PHPJava\Kernel\Structures\DoubleInfo) {
            $value = _Double::get($data->getBytes());
        } else {
            throw new UnsupportedOperationException('Unsupported operation.');
        }

        $this->pushToOperandStack($value);
    }
}
