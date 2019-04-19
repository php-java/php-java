<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Utilities\BinaryTool;

final class _freturn implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute()
    {
        $value = $this->popFromOperandStack();
        return ($value instanceof _Float)
            ? $value
            : new _Float($value);
    }
}
