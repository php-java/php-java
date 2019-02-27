<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Classes implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $innerClassInfoIndex = 0;
    private $outerClassInfoIndex = 0;
    private $innerNameIndex = 0;
    private $innerClassAccessFlag = 0;
    public function execute(): void
    {
    }
    public function setInnerClassInfoIndex($innerClassInfoIndex)
    {
        $this->innerClassInfoIndex = $innerClassInfoIndex;
    }
    public function setOuterClassInfoIndex($outerClassInfoIndex)
    {
        $this->outerClassInfoIndex = $outerClassInfoIndex;
    }
    public function setInnerNameIndex($innerNameIndex)
    {
        $this->innerNameIndex = $innerNameIndex;
    }
    public function setInnerClassAccessFlag($innerClassAccessFlag)
    {
        $this->innerClassAccessFlag = $innerClassAccessFlag;
    }
    public function getInnerClassInfoIndex()
    {
        return $this->innerClassInfoIndex;
    }
    public function getOuterClassInfoIndex()
    {
        return $this->outerClassInfoIndex;
    }
    public function getInnerNameIndex()
    {
        return $this->innerNameIndex;
    }
    public function getInnerClassAccessFlag()
    {
        return $this->innerClassAccessFlag;
    }
}
