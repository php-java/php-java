<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _VerificationTypeInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
        // back by tag
        $this->getClass()->seek(-1);
        if ($this->tag == 0) {
            $this->topVariableInfo = new _TopVariableInfo($this->getClass());
        } elseif ($this->tag == 1) {
            $this->integerVariableInfo = new _IntegerVariableInfo($this->getClass());
        } elseif ($this->tag == 2) {
            $this->floatVariableInfo = new _FloatVariableInfo($this->getClass());
        } elseif ($this->tag == 4) {
            $this->longVariableInfo = new _LongVariableInfo($this->getClass());
        } elseif ($this->tag == 3) {
            $this->doubleVariableInfo = new _DoubleVariableInfo($this->getClass());
        } elseif ($this->tag == 5) {
            $this->nullVariableInfo = new _NullVariableInfo($this->getClass());
        } elseif ($this->tag == 6) {
            $this->uninitializedThisVariableInfo = new _UninitializedThisVariableInfo($this->getClass());
        } elseif ($this->tag == 7) {
            $this->objectVariableInfo = new _ObjectVariableInfo($this->getClass());
        } elseif ($this->tag == 8) {
            $this->uninitializedVariableInfo = new _UninitializedVariableInfo($this->getClass());
        }
    }
}
