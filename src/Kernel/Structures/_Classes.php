<?php
namespace PHPJava\Kernel\Structures;

class _Classes implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $innerClassInfoIndex = 0;
    private $outerClassInfoIndex = 0;
    private $innerNameIndex = 0;
    private $innerClassAccessFlag = 0;

    public function execute(): void
    {
        $this->innerClassInfoIndex = $this->readUnsignedShort();
        $this->outerClassInfoIndex = $this->readUnsignedShort();
        $this->innerNameIndex = $this->readUnsignedShort();
        $this->innerClassAccessFlag = $this->readUnsignedShort();
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
