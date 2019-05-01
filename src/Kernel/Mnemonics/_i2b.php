<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _i2b implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(new _Byte($value));
    }
}
