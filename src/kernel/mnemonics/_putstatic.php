<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _putstatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        
        $cp = $cpInfo[$this->readUnsignedShort()];
        
        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        $fieldName = $cpInfo[$class->getNameIndex()]->getString();

        ($this->javaClassInvoker->getStaticFields())->$fieldName = $this->getStack();
    }
}
