<?php

class JavaStructureVarificationTypeInfo extends JavaStructure {
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->Tag = $Class->getJavaBinaryStream()->readUnsignedByte();
        // back by tag
        $Class->getJavaBinaryStream()->seek(-1);
        
        if ($this->Tag == 0) {
            $this->TopVariableInfo = new JavaStructureTopVariableInfo($Class);
        } else if ($this->Tag == 1) {
            $this->IntegerVariableInfo = new JavaStructureIntegerVariableInfo($Class);
        } else if ($this->Tag == 2) {
            $this->FloatVariableInfo = new JavaStructureFloatVariableInfo($Class);
        } else if ($this->Tag == 4) {
            $this->LongVariableInfo = new JavaStructureLongVariableInfo($Class);
        } else if ($this->Tag == 3) {
            $this->DoubleVariableInfo = new JavaStructureDoubleVariableInfo($Class);
        } else if ($this->Tag == 5) {
            $this->NullVariableInfo = new JavaStructureNullVariableInfo($Class);
        } else if ($this->Tag == 6) {
            $this->UninitializedThisVariableInfo = new JavaStructureUninitializedThisVariableInfo($Class);
        } else if ($this->Tag == 7) {
            $this->ObjectVariableInfo = new JavaStructureObjectVariableInfo($Class);
        } else if ($this->Tag == 8) {
            $this->UninitializedVariableInfo = new JavaStructureUninitializedVariableInfo($Class);
        }

}
    
}

