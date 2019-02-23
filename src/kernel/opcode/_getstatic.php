<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;

final class _getstatic implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        
        $cp = $cpInfo[$this->readUnsignedShort()];

        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();

        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());

        foreach ($this->javaClass->getFields() as $field) {
            if ($cpInfo[$field->getNameIndex()]->getString() === $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()) {

                // push stack
                $fieldName = $cpInfo[$field->getNameIndex()]->getString();
                $this->pushStack($this->javaClassInvoker->getStaticFields()->$fieldName);
                return;
            }
        }

        if (isset($signature[0]['className'])) {
            $className = '\\PHPJava\\Bridge\\' . str_replace('/', '\\', $signature[0]['className']);
            $this->pushStack(new $className());
            return;
        }
            
        throw new \Exception('にゃ〜ん');
    }
}
