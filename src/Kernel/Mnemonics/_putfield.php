<?php
namespace PHPJava\Kernel\Mnemonics;

final class _putfield implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $value = $this->popFromOperandStack();
        $name = $cpInfo[$class->getNameIndex()]->getString();
        $objectref = $this->popFromOperandStack();

        $objectref->getInvoker()->getDynamic()->getFields()->set($name, $value);
    }
}
