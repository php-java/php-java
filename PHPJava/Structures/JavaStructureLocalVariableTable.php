<?php

class JavaStructureLocalVariableTable extends JavaStructure {

    private $StartPc = 0;
    private $Length = 0;
    private $NameIndex = 0;
    private $DescriptorIndex = 0;
    private $Index = 0;


    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->StartPc = $Class->getJavaBinaryStream()->readUnsignedShort();
        $this->Length = $Class->getJavaBinaryStream()->readUnsignedShort();
        $this->NameIndex = $Class->getJavaBinaryStream()->readUnsignedShort();
        $this->DescriptorIndex = $Class->getJavaBinaryStream()->readUnsignedShort();
        $this->Index = $Class->getJavaBinaryStream()->readUnsignedShort();

    }

}