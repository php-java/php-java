<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\Utf8Info;

final class _if_acmpeq extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $offset = $this->readShort();

        /**
         * @var JavaClass|StringInfo|Utf8Info $rightOperand
         * @var JavaClass|StringInfo|Utf8Info $leftOperand
         */
        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand === $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
