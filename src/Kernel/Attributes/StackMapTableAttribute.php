<?php
namespace PHPJava\Kernel\Attributes;

final class StackMapTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $numberOfEntries;

    /**
     * @var \PHPJava\Kernel\Structures\_StackMapFrame[]
     */
    private $stackMapFrames = [];

    public function execute(): void
    {
        $this->numberOfEntries = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfEntries; $i++) {
            $stackMapFrame = new \PHPJava\Kernel\Structures\_StackMapFrame($this->reader);
            $stackMapFrame->setConstantPool($this->getConstantPool());
            $stackMapFrame->setDebugTool($this->getDebugTool());
            $stackMapFrame->execute();
            $this->stackMapFrames[] = $stackMapFrame;
        }
    }

    /**
     * @return \PHPJava\Kernel\Structures\_StackMapFrame[]
     */
    public function getStackMapFrames(): array
    {
        return $this->stackMapFrames;
    }
}
