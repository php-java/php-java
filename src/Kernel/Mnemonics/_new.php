<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Internal\InstanceDeferredLoader;

final class _new implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $class = $cpInfo[$this->readUnsignedShort()];
        $className = $cpInfo[$class->getClassIndex()]->getString();

        [$resourceType, $classObject] = $this->getOptions('class_resolver')
            ->resolve($className, $this->javaClass);

        $instanceDeferredLoader = new InstanceDeferredLoader(
            $classObject,
            $resourceType,
            $className
        );

        $this->pushToOperandStackByReference(
            $instanceDeferredLoader
        );
    }
}
