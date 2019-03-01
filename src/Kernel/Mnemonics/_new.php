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

        [$resourceType, $classObject] = ClassResolver::resolve($className);
        if ($resourceType === ClassResolver::RESOLVED_TYPE_CLASS) {
            /**
             * @var \PHPJava\Core\JavaClass $classObject
             */

            $classObjectInvoker = $classObject->getInvoker();
            $arguments = [];
            if ($classObject->hasParentClass()) {
                $arguments[] = $this->javaClass;
            }
            $this->pushStack($classObjectInvoker->construct(...$arguments)->getJavaClass());
            return;
        }
        $this->pushStack(new $classObject());
    }
}
