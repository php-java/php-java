<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\BinaryTool;

final class _if_acmpeq implements OperationInterface
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

        if ($leftOperand->hashCode() === $rightOperand->hashCode()) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
