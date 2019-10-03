<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;

final class _new extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $indexbyte = $this->readUnsignedShort();

        return $this->operands = new Operands(
            ['indexbyte', $indexbyte, ['indexbyte1', 'indexbyte2']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $class = $cpInfo[$this->getOperands()['indexbyte']];
        $className = $cpInfo[$class->getClassIndex()]->getString();

        $javaClass = JavaClass::load(
            $className,
            $this->javaClass->getOptions()
        );

        $this->pushToOperandStackByReference($javaClass);
    }
}
