<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _VerificationTypeInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    public function execute(): void
    {
        $this->Tag = $this->readUnsignedByte();
        // back by tag
        $this->getClass()->seek(-1);
        if ($this->Tag == 0) {
            $this->TopVariableInfo = new _TopVariableInfo($this->getClass());
        } else if ($this->Tag == 1) {
            $this->IntegerVariableInfo = new _IntegerVariableInfo($this->getClass());
        } else if ($this->Tag == 2) {
            $this->FloatVariableInfo = new _FloatVariableInfo($this->getClass());
        } else if ($this->Tag == 4) {
            $this->LongVariableInfo = new _LongVariableInfo($this->getClass());
        } else if ($this->Tag == 3) {
            $this->DoubleVariableInfo = new _DoubleVariableInfo($this->getClass());
        } else if ($this->Tag == 5) {
            $this->NullVariableInfo = new _NullVariableInfo($this->getClass());
        } else if ($this->Tag == 6) {
            $this->UninitializedThisVariableInfo = new _UninitializedThisVariableInfo($this->getClass());
        } else if ($this->Tag == 7) {
            $this->ObjectVariableInfo = new _ObjectVariableInfo($this->getClass());
        } else if ($this->Tag == 8) {
            $this->UninitializedVariableInfo = new _UninitializedVariableInfo($this->getClass());
        }
}
}

