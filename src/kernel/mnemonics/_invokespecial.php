<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _invokespecial implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {            
        $cpInfo = $this->getCpInfo();
        
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        // $invokeClassName = '\\' . str_replace('/', '\\', $cpList[$class->getClassIndex()]->getString());

        
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        
        // signature
        $signature = JavaClass::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        
        $invokeClassName = $this->getStack();

        $arguments = array();

        for ($i = 0; $i < $signature['argumentsCount']; $i++) {

            $arguments[] = $this->getStack();

        }
        
        
    }

}   
