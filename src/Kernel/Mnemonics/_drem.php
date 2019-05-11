<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\Extractor;

final class _drem implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightOperand = Extractor::getRealValue($this->popFromOperandStack());
        $leftOperand = Extractor::getRealValue($this->popFromOperandStack());

        $this->pushToOperandStack(
            _Double::get(
                $leftOperand % $rightOperand
            )
        );
    }
}
