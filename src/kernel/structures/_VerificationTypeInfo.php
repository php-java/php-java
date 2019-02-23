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
        } elseif ($this->Tag == 1) {
            $this->IntegerVariableInfo = new _IntegerVariableInfo($this->getClass());
        } elseif ($this->Tag == 2) {
            $this->FloatVariableInfo = new _FloatVariableInfo($this->getClass());
        } elseif ($this->Tag == 4) {
            $this->LongVariableInfo = new _LongVariableInfo($this->getClass());
        } elseif ($this->Tag == 3) {
            $this->DoubleVariableInfo = new _DoubleVariableInfo($this->getClass());
        } elseif ($this->Tag == 5) {
            $this->NullVariableInfo = new _NullVariableInfo($this->getClass());
        } elseif ($this->Tag == 6) {
            $this->UninitializedThisVariableInfo = new _UninitializedThisVariableInfo($this->getClass());
        } elseif ($this->Tag == 7) {
            $this->ObjectVariableInfo = new _ObjectVariableInfo($this->getClass());
        } elseif ($this->Tag == 8) {
            $this->UninitializedVariableInfo = new _UninitializedVariableInfo($this->getClass());
        }
    }
}
