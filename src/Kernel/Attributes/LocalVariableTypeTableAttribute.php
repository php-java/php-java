<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\LocalVariableTypeTable;

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
     * @var LocalVariableTypeTable[]
     */
    private $localVariableTypeTable = [];

    public function execute(): void
    {
        $this->localVariableTypeTableLength = $this->readUnsignedShort();
        $this->localVariableTypeTable = [];
        for ($i = 0; $i < $this->localVariableTypeTableLength; $i++) {
            $this->localVariableTypeTable[$i] = new LocalVariableTypeTable($this->reader);
            $this->localVariableTypeTable[$i]->execute();
        }
    }
}
