<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Extractor;

final class _fcmpg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightOperand = Extractor::getRealValue($this->popFromOperandStack());
        $leftOperand = Extractor::getRealValue($this->popFromOperandStack());

        if ($leftOperand > $rightOperand) {
            $this->pushToOperandStack(
                _Int::get(1)
            );
            return;
        }

        if ($leftOperand < $rightOperand) {
            $this->pushToOperandStack(
                _Int::get(-1)
            );
            return;
        }

        $this->pushToOperandStack(
            _Int::get(0)
        );
    }
}
