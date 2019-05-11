<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\Extractor;

final class _i2l implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(_Long::get($value));
    }
}
