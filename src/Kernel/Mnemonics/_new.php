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
            $this->pushToOperandStack($this->javaClass);
            return;
        }

        [$resourceType, $classObject] = ClassResolver::resolve($className, $this->javaClass);
        if ($resourceType === ClassResolver::RESOLVED_TYPE_CLASS) {
            /**
             * @var \PHPJava\Core\JavaClass $classObject
             */
            $this->pushToOperandStack($classObject->getInvoker()->construct()->getJavaClass());
            return;
        }
        $this->pushToOperandStack(new $classObject());
    }
}
