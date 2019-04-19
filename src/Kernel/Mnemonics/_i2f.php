<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _i2f implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::realValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(new _Float($value));
    }
}
