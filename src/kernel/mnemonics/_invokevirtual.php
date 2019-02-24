<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
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

        $javaObjectName = str_replace('/', '\\', $class);

        if ($javaObjectName === 'java\\lang\\String') {
            // For PHP
            $javaObjectName = 'java\\lang\\_String';
        }

        $invokerClassName = '\\PHPJava\\Bridge\\' . $javaObjectName;
        $result = call_user_func_array([
            new $invokerClassName,
            $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()
        ], $arguments);

        if ($signature[0]['type'] !== 'void') {
            $this->pushStack($result);
        }
    }
}
