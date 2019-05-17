<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\_LocalVariableTypeTable;

final class LocalVariableTypeTableAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $localVariableTypeTableLength = 0;

    /**
     * @var _LocalVariableTypeTable[]
     */
    private $localVariableTypeTable = [];

    public function execute(): void
    {
        $this->localVariableTypeTableLength = $this->readUnsignedShort();
        $this->localVariableTypeTable = [];
        for ($i = 0; $i < $this->localVariableTypeTableLength; $i++) {
            $this->localVariableTypeTable[$i] = new _LocalVariableTypeTable($this->reader);
            $this->localVariableTypeTable[$i]->execute();
        }
    }
}
