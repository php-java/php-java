<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Kernel\Maps\VerificationTypeTag;
use PHPJava\Kernel\Variables\VariableInfoInterface;

class VerificationTypeInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $tag = 0;

    /**
     * @var null|VariableInfoInterface
     */
    private $variableInfo;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();

        // back by tag
        $this->reader->getReader()->seek(-1);

        switch ($this->tag) {
            case VerificationTypeTag::ITEM_Top:
                $this->variableInfo = new \PHPJava\Kernel\Variables\TopVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Integer:
                $this->variableInfo = new \PHPJava\Kernel\Variables\IntegerVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Float:
                $this->variableInfo = new \PHPJava\Kernel\Variables\FloatVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Long:
                $this->variableInfo = new \PHPJava\Kernel\Variables\LongVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Double:
                $this->variableInfo = new \PHPJava\Kernel\Variables\DoubleVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Null:
                $this->variableInfo = new \PHPJava\Kernel\Variables\NullVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_UninitializedThis:
                $this->variableInfo = new \PHPJava\Kernel\Variables\UninitializedThisVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Object:
                $this->variableInfo = new \PHPJava\Kernel\Variables\ObjectVariableInfo($this->reader);
                break;
            case VerificationTypeTag::ITEM_Uninitialized:
                $this->variableInfo = new \PHPJava\Kernel\Variables\UninitializedVariableInfo($this->reader);
                break;
        }
        $this->variableInfo->execute();
    }
}
