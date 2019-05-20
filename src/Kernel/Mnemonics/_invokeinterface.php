<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Internal\Lambda;
use PHPJava\Kernel\Types\Type;
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
        $collection = array_fill(0, $signature['arguments_count'] + 1, null);
        for ($i = count($collection) - 1; $i >= 0; $i--) {
            $collection[$i] = $this->popFromOperandStack();
        }

        $objectref = $collection[0];
        $arguments = array_values(array_slice($collection, 1));

        if ($objectref instanceof Lambda) {
            $result = $objectref(...$arguments);
        } else {
            $result = $objectref->getInvoker()->getDynamic()->getMethods()->call(
                $name,
                ...$arguments
            );
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
