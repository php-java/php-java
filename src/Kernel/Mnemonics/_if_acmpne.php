<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Packages\java\lang\_String;

final class _if_acmpne implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        /**
         * @var _String|JavaClass|Utf8Info $rightOperand
         * @var _String|JavaClass|Utf8Info $leftOperand
         */
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand !== $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
