<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;

final class _new implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $class = $cpInfo[$this->readUnsignedShort()];
        $className = $cpInfo[$class->getClassIndex()]->getString();

        $javaClass = JavaClass::load(
            $className,
            $this->javaClass->getOptions()
        );

        $this->pushToOperandStackByReference($javaClass);
    }
}
