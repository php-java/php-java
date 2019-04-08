<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _irem implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        // JVM speck wrote `value1 - (value1 / value2) * value2`
        // But PHP can modulo calculation.

        $rightOperand = Extractor::realValue($this->getStack());
        $leftOperand = Extractor::realValue($this->getStack());

        $this->pushStack(
            new _Int(
                $leftOperand % $rightOperand
            )
        );
    }
}
