<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _dcmpg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $leftOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

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
