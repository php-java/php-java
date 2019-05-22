<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Utilities\ClassHandler;
use PHPJava\Utilities\Formatter;

final class _getstatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        $fieldName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();

        [$resourceType, $classObject] = $this->javaClass->getOptions('class_resolver')
            ->resolve(
                $class,
                $this->javaClass,
                false
            );

        if ($resourceType === ClassResolver::RESOLVED_TYPE_CLASS) {
            /**
             * @var JavaClassInterface $className
             */
            $this->pushToOperandStack($classObject->getInvoker()->getStatic()->getFields()->get($fieldName));
            return;
        }

        $this->pushToOperandStack(
            ClassHandler::getStaticField(
                $classObject,
                $fieldName
            )
        );
    }
}
