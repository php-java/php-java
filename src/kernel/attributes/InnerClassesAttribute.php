<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class InnerClassesAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $NumberOfClasses = 0;
    private $Classes = array();
    public function execute(): void
    {
        $this->NumberOfClasses = $this->getCurrentClass()->readUnsignedShort();
        for ($i = 0; $i < $this->NumberOfClasses; $i++) {
            $this->getCurrentClass()es[$i] = new JavaStructureClasses($this->getCurrentClass());
            $this->getCurrentClass()es[$i]->setInnerClassInfoIndex($this->getCurrentClass()->readUnsignedShort());
            $this->getCurrentClass()es[$i]->setOuterClassInfoIndex($this->getCurrentClass()->readUnsignedShort());
            $this->getCurrentClass()es[$i]->setInnerNameIndex($this->getCurrentClass()->readUnsignedShort());
            $this->getCurrentClass()es[$i]->setInnerClassAccessFlag($this->getCurrentClass()->readUnsignedShort());
        }
    }
    public function getClasses () {
        return $this->getCurrentClass()es;
    }
}
