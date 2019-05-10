<?php
namespace PHPJava\Kernel\Mnemonics;

final class _putstatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $cp = $cpInfo[$this->readUnsignedShort()];

        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        $fieldName = $cpInfo[$class->getNameIndex()]->getString();

        $this->javaClassInvoker->getStatic()->getFields()->set($fieldName, $this->popFromOperandStack());
    }
}
