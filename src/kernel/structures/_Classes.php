<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

class _Classes implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $InnerClassInfoIndex = 0;
    private $OuterClassInfoIndex = 0;
    private $InnerNameIndex = 0;
    private $InnerClassAccessFlag = 0;
    public function execute(): void
    {
    }
    public function setInnerClassInfoIndex($InnerClassInfoIndex)
    {
        $this->InnerClassInfoIndex = $InnerClassInfoIndex;
    }
    public function setOuterClassInfoIndex($OuterClassInfoIndex)
    {
        $this->OuterClassInfoIndex = $OuterClassInfoIndex;
    }
    public function setInnerNameIndex($InnerNameIndex)
    {
        $this->InnerNameIndex = $InnerNameIndex;
    }
    public function setInnerClassAccessFlag($InnerClassAccessFlag)
    {
        $this->InnerClassAccessFlag = $InnerClassAccessFlag;
    }
    public function getInnerClassInfoIndex()
    {
        return $this->InnerClassInfoIndex;
    }
    public function getOuterClassInfoIndex()
    {
        return $this->OuterClassInfoIndex;
    }
    public function getInnerNameIndex()
    {
        return $this->InnerNameIndex;
    }
    public function getInnerClassAccessFlag()
    {
        return $this->InnerClassAccessFlag;
    }
}
