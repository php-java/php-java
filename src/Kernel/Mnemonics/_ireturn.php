<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;

final class _ireturn implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    // return an integer from a method
    public function execute()
    {
        $value = $this->popFromOperandStack();
        return ($value instanceof _Int)
            ? $value
            : new _Int($value);
    }
}
