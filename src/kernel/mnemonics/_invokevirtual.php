<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\ClassResolver;
use PHPJava\Utilities\Formatter;

final class _invokevirtual implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];

        // signature
        $signature = Formatter::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        $arguments = [];

        for ($i = 0; $i < $signature['arguments_count']; $i++) {
            $arguments[] = $this->getStack();
        }
        $invokerClass = $this->getStack();
        $invokerClassName = ClassResolver::resolve($class);
        $result = call_user_func_array(
            [
                $invokerClass,
                $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()
            ],
            $arguments
        );

        if ($signature[0]['type'] !== 'void') {
            $this->pushStack($result);
        }
    }
}
