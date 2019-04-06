<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class SourceFileAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $sourceFileIndex = null;
    public function execute(): void
    {
        $this->sourceFileIndex = $this->readUnsignedShort();
    }
    public function getSourceFileIndex()
    {
        return $this->sourceFileIndex;
    }
}
