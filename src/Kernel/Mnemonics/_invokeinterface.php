<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Internal\Lambda;
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
        $arguments = array_fill(0, $signature['arguments_count'], null);
        for ($i = count($arguments) - 1; $i >= 0; $i--) {
            $arguments[$i] = $this->popFromOperandStack();
        }

        $objectref = $this->popFromOperandStack();

        if ($objectref instanceof Lambda) {
            $result = $objectref($name, ...$arguments);
        } else {
            $result = $objectref->getInvoker()->getDynamic()->getMethods()->call(
                $name,
                ...$arguments
            );
        }

        if ($signature[0]['type'] !== 'void') {
            $this->pushToOperandStack(
                Normalizer::normalizeReturnValue(
                    $result,
                    $signature[0]
                )
            );
        }
    }
}
