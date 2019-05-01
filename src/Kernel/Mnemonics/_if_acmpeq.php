<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

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
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand === $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
