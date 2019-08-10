<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Formatter;

final class _putfield extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $value = $this->popFromOperandStack();
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

        /**
         * @var JavaClassInterface $objectref
         */
        $objectref = $this->popFromOperandStack();
        $objectref->getInvoker()->getDynamic()->getFields()->set(
            $fieldName,
            $value
        );
    }
}
