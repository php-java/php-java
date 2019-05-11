<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;

final class _lreturn implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute()
    {
        $value = $this->popFromOperandStack();
        return ($value instanceof _Long)
            ? $value
            : _Long::get($value);
    }
}
