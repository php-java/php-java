<?php

class JavaByteCodeStream extends JavaBinaryStream {

    private $OperandStacks = array();

    public function readByte () {

        $result = parent::readByte();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function readUnsignedByte () {

        $result = parent::readUnsignedByte();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function readInt () {

        $result = parent::readInt();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function readUnsignedInt () {

        $result = parent::readUnsignedInt();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function readShort () {

        $result = parent::readShort();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function readUnsignedShort () {

        $result = parent::readUnsignedShort();
        $this->OperandStacks[] = $result;

        return $result;

    }

    public function getOperands () {

        $operands = $this->OperandStacks;

        $this->OperandStacks = array();

        return $operands;

    }

}