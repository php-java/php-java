<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_Fieldref;
use PHPJava\Utilities\ClassResolver;
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

        if ($cp instanceof _Fieldref) {
            foreach ($this->javaClass->getDefinedFields() as $field) {
                if ($cpInfo[$field->getNameIndex()]->getString() === $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()) {
                    // push stack
                    $fieldName = $cpInfo[$field->getNameIndex()]->getString();
                    $this->pushToOperandStack($this->javaClassInvoker->getStatic()->getFields()->get($fieldName));
                    return;
                }
            }
        }

        if (isset($signature[0]['class_name'])) {
            [$resourceType, $classObject] = $this->getOptions('class_resolver')
                ->resolve($signature[0]['class_name']);
            if ($resourceType === ClassResolver::RESOLVED_TYPE_CLASS) {
                /**
                 * @var \PHPJava\Core\JavaClass $className
                 */
                throw new NotImplementedException(
                    'Not implemented operation.'
                );
                return;
            }
            $this->pushToOperandStack(new $classObject());
            return;
        }
    }
}
