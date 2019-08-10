<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\Utf8Info;

final class _if_acmpeq extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
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
