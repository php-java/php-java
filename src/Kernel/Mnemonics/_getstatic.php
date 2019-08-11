<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Utilities\Formatter;

final class _getstatic extends AbstractOperationCode implements OperationCodeInterface
{
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

        $cp = $cpInfo[$this->getOperands()['indexbyte']];
        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        $fieldName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();

        $classObject = JavaClass::load(
            $class,
            $this->javaClass->getOptions(),
            false
        );

        /**
         * @var JavaClassInterface $className
         */
        $this->pushToOperandStack(
            $classObject
                ->getInvoker()
                ->getStatic()
                ->getFields()
                ->get($fieldName)
        );
    }
}
