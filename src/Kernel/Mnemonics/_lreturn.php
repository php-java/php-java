<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\BinaryTool;

final class _lreturn implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute()
    {
        $value = $this->getStack();
        return ($value instanceof _Long)
            ? $value
            : new _Long($value);
    }
}
