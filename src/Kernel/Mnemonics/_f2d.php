<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\Extractor;

final class _f2d implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(_Double::get($value));
    }
}
