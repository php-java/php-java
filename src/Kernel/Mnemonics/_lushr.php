<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\Extractor;

final class _lushr implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = (int) Extractor::getRealValue($this->popFromOperandStack());
        $value1 = (int) Extractor::getRealValue($this->popFromOperandStack());

        // See: https://stackoverflow.com/questions/14428193/php-unsigned-right-shift-malfunctioning
        $this->pushToOperandStack(
            _Long::get(($value1 >> $value2) & ~(1 << (8 * PHP_INT_SIZE - 1) >> ($value2 - 1)))
        );
    }
}
