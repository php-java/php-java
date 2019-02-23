<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class LocalVariableTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $LocalVariableTableLength;
    private $LocalVariableTables = array();
    public function execute(): void
    {
        $this->LocalVariableTableLength = $this->getCurrentClass()->readUnsignedShort();
        for ($i = 0; $i < $this->LocalVariableTableLength; $i++) {
            $this->LocalVariableTables[] = new JavaStructureLocalVariableTable($Class);
        }
    }
}
