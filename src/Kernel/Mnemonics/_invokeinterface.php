<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NoSuchCodeAttributeException;
use PHPJava\Kernel\Internal\Lambda;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\TypeResolver;

final class _invokeinterface implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cp = $this->getConstantPool();
        $index = $this->readUnsignedShort();
        $count = $this->readUnsignedByte();

        // NOTE: The value of the fourth operand byte must always be zero.
        $this->readByte();

        $interfaceMethodRef = $cp[$cp[$index]->getNameAndTypeIndex()];
        $name = $cp[$interfaceMethodRef->getNameIndex()]->getString();
        $descriptor = $cp[$interfaceMethodRef->getDescriptorIndex()]->getString();

        $signature = Formatter::parseSignature($descriptor);

        // POP with right-to-left (objectref + arguments)
        $arguments = array_fill(0, $signature['arguments_count'], null);
        for ($i = count($arguments) - 1; $i >= 0; $i--) {
            $arguments[$i] = $this->popFromOperandStack();
        }

        $objectref = $this->popFromOperandStack();

        try {
            if ($objectref instanceof Lambda) {
                $result = $objectref(...$arguments);
            } else {
                $result = $objectref->getInvoker()->getDynamic()->getMethods()->call(
                    $name,
                    ...$arguments
                );
            }
        } catch (NoSuchCodeAttributeException $e) {
            if ($signature[0]['class_name'] === 'java/lang/Class') {
                $result = $objectref->getClass();
            }
            if ($signature[0]['class_name'] === 'java/lang/String') {
                $result = new _String();
            }
        }

        if ($signature[0]['type'] !== 'void') {
            /**
             * @var Type $typeClass
             */
            [$type, $typeClass] = TypeResolver::getType($signature[0]);
            $this->pushToOperandStack(
                $type === TypeResolver::IS_PRIMITIVE
                    ? $typeClass::get($result)
                    : $result
            );
        }
    }
}
