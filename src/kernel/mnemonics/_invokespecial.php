<?php
namespace PHPJava\Kernel\Mnemonics;

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
        
        // signature
        $signature = Formatter::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        
        $invokerClassName = $this->getStack();

        $arguments = [];

        for ($i = 0; $i < $signature['arguments_count']; $i++) {
            $arguments[] = $this->getStack();
        }

        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();
        var_dump($methodName);

//        $result = call_user_func_array(
//            [$this->javaClassInvoker->getDynamicMethods(), $methodName],
//            $arguments
//        );
//
//        if ($signature[0]['type'] !== 'void') {
//            $this->pushStack($result);
//        }
    }
}
