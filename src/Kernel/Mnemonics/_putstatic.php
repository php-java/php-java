<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Formatter;

final class _putstatic extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $indexbyte = $this->readUnsignedShort();

        return $this->operands = new Operands(
            ['indexbyte', $indexbyte, ['indexbyte1', 'indexbyte2']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();

        $value = $this->popFromOperandStack();

        $cp = $cpInfo[$this->getOperands()['indexbyte']];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $fieldName = $cpInfo[$class->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$class->getDescriptorIndex()]->getString());
        [$type, $typeClass] = TypeResolver::getType($signature[0]);

        if ($type === TypeResolver::IS_PRIMITIVE) {
            /**
             * @var Type $typeClass
             */
            $value = $typeClass::get(
                Normalizer::getPrimitiveValue(
                    $value
                )
            );
        }

        JavaClass::load($className, $this->javaClass->getOptions(), false)
            ->getInvoker()
            ->getStatic()
            ->getFields()
            ->set(
                $fieldName,
                $value
            );
    }
}
