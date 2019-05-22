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
        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $fieldName = $cpInfo[$class->getNameIndex()]->getString();

        $classObject = $this->javaClass;
        if ($this->javaClass->getClassName() !== $className) {
            [$resourceType, $classObject] = $this->javaClass->getOptions('class_resolver')
                ->resolve(
                    $className,
                    $this->javaClass,
                    false
                );
        }

        $classObject->getInvoker()->getStatic()->getFields()->set(
            $fieldName,
            $this->popFromOperandStack()
        );
    }
}
