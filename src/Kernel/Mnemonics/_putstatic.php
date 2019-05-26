<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;

final class _putstatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $fieldName = $cpInfo[$class->getNameIndex()]->getString();

        JavaClass::load($className, $this->javaClass->getOptions(), false)
            ->getInvoker()
            ->getStatic()
            ->getFields()
            ->set(
                $fieldName,
                $this->popFromOperandStack()
            );
    }
}
