<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class InnerClassesAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $NumberOfClasses = 0;
    private $Classes = array();
    public function execute(): void
    {
        $this->NumberOfClasses = $this->readUnsignedShort();
        for ($i = 0; $i < $this->NumberOfClasses; $i++) {
            $thises[$i] = new JavaStructureClasses($this);
            $thises[$i]->setInnerClassInfoIndex($this->readUnsignedShort());
            $thises[$i]->setOuterClassInfoIndex($this->readUnsignedShort());
            $thises[$i]->setInnerNameIndex($this->readUnsignedShort());
            $thises[$i]->setInnerClassAccessFlag($this->readUnsignedShort());
        }
    }
    public function getClasses()
    {
        return $thises;
    }
}
