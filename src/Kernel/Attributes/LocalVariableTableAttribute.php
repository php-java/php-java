<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\LocalVariableTable;

final class LocalVariableTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $localVariableTableLength;

    /**
     * @var LocalVariableTable[]
     */
    private $localVariableTables = [];

    public function execute(): void
    {
        $this->localVariableTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->localVariableTableLength; $i++) {
            $localVariableTable = new LocalVariableTable($this->reader);
            $localVariableTable->execute();
            $this->localVariableTables[] = $localVariableTable;
        }
    }
}
