<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _i2d implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::realValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(new _Double($value));
    }
}
