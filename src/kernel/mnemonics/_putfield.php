<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _putfield implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $value = $this->getStack();
        $name = $cpInfo[$class->getNameIndex()]->getString();
        $objectref = $this->getStack();

        $objectref->getInvoker()->getDynamicFields()->set($name, $value);
    }
}
