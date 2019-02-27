<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Variables\VariableInfoInterface;
use PHPJava\Utilities\BinaryTool;

class _VerificationTypeInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag = 0;

    /**
     * @var VariableInfoInterface|null
     */
    private $variableInfo = null;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();

        // back by tag
        $this->reader->getBinaryReader()->seek(-1);

        switch ($this->tag) {
            case 0:
                $this->variableInfo = new \PHPJava\Kernel\Variables\TopVariableInfo($this->reader);
                break;
            case 1:
                $this->variableInfo = new \PHPJava\Kernel\Variables\IntegerVariableInfo($this->reader);
                break;
            case 2:
                $this->variableInfo = new \PHPJava\Kernel\Variables\FloatVariableInfo($this->reader);
                break;
            case 3:
                $this->variableInfo = new \PHPJava\Kernel\Variables\LongVariableInfo($this->reader);
                break;
            case 4:
                $this->variableInfo = new \PHPJava\Kernel\Variables\DoubleVariableInfo($this->reader);
                break;
            case 5:
                $this->variableInfo = new \PHPJava\Kernel\Variables\NullVariableInfo($this->reader);
                break;
            case 6:
                $this->variableInfo = new \PHPJava\Kernel\Variables\UninitializedThisVariableInfo($this->reader);
                break;
            case 7:
                $this->variableInfo = new \PHPJava\Kernel\Variables\ObjectVariableInfo($this->reader);
                break;
            case 8:
                $this->variableInfo = new \PHPJava\Kernel\Variables\UninitializedVariableInfo($this->reader);
                break;
        }
        $this->variableInfo->execute();
    }
}
