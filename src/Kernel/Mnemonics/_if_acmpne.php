<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Utilities\BinaryTool;

final class _if_acmpne implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        /**
         * @var $rightOperand _String|_Utf8
         * @var $leftOperand _String|_Utf8
         */
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand->hashCode() !== $rightOperand->hashCode()) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
