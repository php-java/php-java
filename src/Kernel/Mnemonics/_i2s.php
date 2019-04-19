<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _i2s implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::realValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(new _Short($value));
    }
}
