<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class StackMapTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $numberOfEntries = null;
    private $stackMapFrames = array();
    public function execute(): void
    {
        $this->numberOfEntries = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfEntries; $i++) {
            $stackMapFrame = new \PHPJava\Kernel\Structures\_StackMapFrame($this->reader);
            $stackMapFrame->setConstantPool($this->getConstantPool());
            $stackMapFrame->execute();
            $this->stackMapFrames[] = $stackMapFrame;
        }
    }
    public function getStackMapFrames()
    {
        return $this->stackMapFrames;
    }
}
