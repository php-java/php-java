<?php
namespace PHPJava\Kernel\Attributes;

final class SourceFileAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $sourceFileIndex;

    public function execute(): void
    {
        $this->sourceFileIndex = $this->readUnsignedShort();
    }

    public function getSourceFileIndex(): int
    {
        return $this->sourceFileIndex;
    }
}
