<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class LineNumberTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $lineNumberTableLength = null;
    private $lineNumberTables = null;
    public function execute(): void
    {
        $this->lineNumberTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->lineNumberTableLength; $i++) {
            $this->lineNumberTables[$i] = new JavaStructureLineNumberTable($class);
            $this->lineNumberTables[$i]->setStartPc($this->readUnsignedShort());
            $this->lineNumberTables[$i]->setLineNumber($this->readUnsignedShort());
        }
    }
    public function getLineNumberTables()
    {
        return $this->lineNumberTables;
    }
}
