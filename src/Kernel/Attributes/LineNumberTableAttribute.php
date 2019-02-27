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
            $lineNumberTable = new \PHPJava\Kernel\Structures\_LineNumberTable($this->reader);
            $lineNumberTable->setConstantPool($this->getConstantPool());
            $lineNumberTable->setStartPc($this->readUnsignedShort())
                ->setLineNumber($this->readUnsignedShort())
                ->execute();
            $this->lineNumberTables[] = $lineNumberTable;
        }
    }
    public function getLineNumberTables()
    {
        return $this->lineNumberTables;
    }
}
