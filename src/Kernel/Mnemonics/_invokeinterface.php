<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;

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

        $result = $objectref(...$arguments);

        if ($signature[0] !== 'void') {
            $this->pushToOperandStack($result);
        }
    }
}
