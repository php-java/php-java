<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;

final class _invokespecial implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        $signature = Formatter::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        $invokerClass = $this->getStack();

        $arguments = [];

        for ($i = 0; $i < $signature['arguments_count']; $i++) {
            $arguments[] = $this->getStack();
        }

        krsort($arguments);

        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

        if ($invokerClass instanceof JavaClass) {
//            $result = $invokerClass->getInvoker()->getDynamicMethods()
//                ->call($methodName, ...$arguments);
        } else {
            $result = call_user_func_array(
                [
                    $invokerClass,
                    $methodName
                ],
                $arguments
            );
        }

        if ($signature[0]['type'] !== 'void') {
            $this->pushStack($result);
        }
    }
}
