<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;

final class _invokespecial implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        
        
        $cp = $cpInfo[$this->readUnsignedShort()];

        // $invokeClassName = '\\' . str_replace('/', '\\', $cpList[$class->getClassIndex()]->getString());

        
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        
        // signature
        $signature = Formatter::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        
        $invokeClassName = $this->getStack();

        $arguments = [];

        for ($i = 0; $i < $signature['argumentsCount']; $i++) {
            $arguments[] = $this->getStack();
        }
    }
}
