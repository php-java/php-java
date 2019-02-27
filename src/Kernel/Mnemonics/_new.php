<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\ClassResolver;

final class _new implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        $class = $cpInfo[$this->readUnsignedShort()];
        $className = $cpInfo[$class->getClassIndex()]->getString();
        if ($className === $this->javaClass->getClassName()) {
            // will be called <init>
            $this->pushStack($this->javaClass);
            return;
        }

        $invokeClassName = ClassResolver::resolve($className);
        $this->pushStack(new $invokeClassName());
    }
}
