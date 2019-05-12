<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\Extractor;

final class _lxor implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = $this->popFromOperandStack();
        $value1 = $this->popFromOperandStack();

        $this->pushToOperandStack(
            _Long::get(
                BinaryTool::xorBits(
                    Extractor::getRealValue($value1),
                    Extractor::getRealValue($value2),
                    8
                )
            )
        );
    }
}
