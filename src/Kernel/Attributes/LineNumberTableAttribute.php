<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class LineNumberTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $lineNumberTableLength;

    /**
     * @var \PHPJava\Kernel\Structures\LineNumberTable[]
     */
    private $lineNumberTables = [];

    public function execute(): void
    {
        $this->lineNumberTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->lineNumberTableLength; $i++) {
            $lineNumberTable = new \PHPJava\Kernel\Structures\LineNumberTable($this->reader);
            $lineNumberTable->setConstantPool($this->getConstantPool());
            $lineNumberTable->setDebugTool($this->getDebugTool());
            $lineNumberTable->execute();
            $this->lineNumberTables[] = $lineNumberTable;
        }
    }

    /**
     * @return \PHPJava\Kernel\Structures\LineNumberTable[]
     */
    public function getLineNumberTables(): array
    {
        return $this->lineNumberTables;
    }
}
