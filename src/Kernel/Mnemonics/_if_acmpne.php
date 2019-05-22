<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaFileClass;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Packages\java\lang\_String;

final class _if_acmpne implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        /**
         * @var _String|_Utf8|JavaFileClass $rightOperand
         * @var _String|_Utf8|JavaFileClass $leftOperand
         */
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand !== $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
