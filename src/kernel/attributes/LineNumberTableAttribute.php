<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class LineNumberTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $LineNumberTableLength = null;
    private $LineNumberTables = null;
    public function execute(): void
    {
        $this->LineNumberTableLength = $this->getCurrentClass()->readUnsignedShort();
        for ($i = 0; $i < $this->LineNumberTableLength; $i++) {
            $this->LineNumberTables[$i] = new JavaStructureLineNumberTable($Class);
            $this->LineNumberTables[$i]->setStartPc($this->getCurrentClass()->readUnsignedShort());
            $this->LineNumberTables[$i]->setLineNumber($this->getCurrentClass()->readUnsignedShort());
        }
    }
    public function getLineNumberTables()
    {
        return $this->LineNumberTables;
    }
}
