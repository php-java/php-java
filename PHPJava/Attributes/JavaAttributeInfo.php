<?php

class JavaAttributeInfo extends JavaAttribute {

    private $AttributeNameIndex = null;
    private $AttributeLength = null;

    private $AttributeData = null;

    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->AttributeNameIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->AttributeLength = $this->Class->getJavaBinaryStream()->readUnsignedInt();

        $cpInfo = $this->Class->getCpInfo();

        $classAttributeName = 'Java' . $cpInfo[$this->AttributeNameIndex]->getString() . 'Attribute';

        $this->AttributeData = new $classAttributeName($Class);


    }

    public function getAttributeData () {

        return $this->AttributeData;

    }

    public function getAttributeNameIndex () {

        return $this->AttributeNameIndex;

    }

    public function getAttributeLength () {

        return $this->AttributeLength;

    }

}