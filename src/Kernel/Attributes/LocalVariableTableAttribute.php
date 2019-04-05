<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_LocalVariableTable;
use PHPJava\Utilities\BinaryTool;

final class LocalVariableTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $localVariableTableLength;
    private $localVariableTables = [];

    public function execute(): void
    {
        $this->localVariableTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->localVariableTableLength; $i++) {
            $localVariableTable = new _LocalVariableTable($this->reader);
            $localVariableTable->execute();
            $this->localVariableTables[] = $localVariableTable;
        }
    }
}
