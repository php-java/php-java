<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class SourceFileAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $SourceFileIndex = null;
    public function execute(): void
    {
        $this->SourceFileIndex = $this->readUnsignedShort();
    }
    public function getSourceFileIndex()
    {
        return $this->SourceFileIndex;
    }
}
