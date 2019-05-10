<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;

final class _if_acmpeq implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        /**
         * @var _String|_Utf8|JavaClass $rightOperand
         * @var _String|_Utf8|JavaClass $leftOperand
         */
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand === $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
