<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_Classes;
use PHPJava\Utilities\BinaryTool;

final class InnerClassesAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;

    private $numberOfClasses = 0;
    private $classes = [];

    public function execute(): void
    {
        $this->numberOfClasses = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfClasses; $i++) {
            $this->classes[$i] = new _Classes($this->reader);
            $this->classes[$i]->setInnerClassInfoIndex($this->readUnsignedShort());
            $this->classes[$i]->setOuterClassInfoIndex($this->readUnsignedShort());
            $this->classes[$i]->setInnerNameIndex($this->readUnsignedShort());
            $this->classes[$i]->setInnerClassAccessFlag($this->readUnsignedShort());
        }
    }
    public function getClasses(): array
    {
        return $this->classes;
    }
}
