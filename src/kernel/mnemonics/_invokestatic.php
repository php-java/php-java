<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _invokestatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        
        $cp = $cpInfo[$this->readUnsignedShort()];
        
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        
        $signature = JavaClass::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        
        $arguments = array();
        
        for ($i = 0; $i < $signature['argumentsCount']; $i++) {
            $arguments[] = $this->getStack();
        }
        
        krsort($arguments);
        
        // call invoker
        $return = call_user_func_array(array(
            $this->getInvoker(),
            $methodName
        ), $arguments);
        
        if ($signature[0]['type'] !== 'void') {
            $this->pushStack($return);
        }
    }
}
