<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _getstatic implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();

        $signature = JavaClass::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());

        foreach ($this->getInvoker()->getClass()->getFields() as $field) {
            if ($cpInfo[$field->getNameIndex()]->getString() === $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()) {

                // push stack
                $this->pushStack($this->getInvoker()->getClass()->getStatic($cpInfo[$field->getNameIndex()]->getString()));

                return;
            }
        }

        if (isset($signature[0]['className'])) {
            $this->getInvoker()->loadPlatform($class);
            $this->getInvoker()->loadPlatform($signature[0]['className']);
            $className = str_replace('/', '\\', $signature[0]['className']);
            
            $this->pushStack(new $className());
            return;
        }
            
        throw new Exception('Has not class or field');
    }
}
