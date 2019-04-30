<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
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
         * @var $rightOperand _String|_Utf8|JavaClass
         * @var $leftOperand _String|_Utf8|JavaClass
         */
        $rightComparingValue = $rightOperand = $this->popFromOperandStack();
        $leftComparingValue = $leftOperand = $this->popFromOperandStack();

        if (method_exists($rightComparingValue, 'hashCode')) {
            $rightComparingValue = $rightComparingValue->hashCode();
        }

        if (method_exists($leftComparingValue, 'hashCode')) {
            $leftComparingValue = $leftComparingValue->hashCode();
        }

        if ($leftComparingValue === $rightComparingValue) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
