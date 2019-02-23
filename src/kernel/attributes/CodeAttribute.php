<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;

final class CodeAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $MaxStack = null;
    private $MaxLocals = null;
    private $CodeLength = null;
    private $RawCode = '';
    private $Code = array();
    private $ExceptionTableLength = null;
    private $ExceptionTables = array();
    private $AttributeInfo = array();
    public function execute(): void
    {
        
        $this->MaxStack = $this->getJavaBinaryStream()->readUnsignedShort();
        $this->MaxLocals = $this->getJavaBinaryStream()->readUnsignedShort();
        $this->CodeLength = $this->getJavaBinaryStream()->readUnsignedInt();
        // read opcode
        $this->Code = array();
        for ($i = 0; $i < $this->CodeLength; $i++) {
            $this->Code[$i] = $this->getJavaBinaryStream()->readUnsignedByte();
            $this->RawCode .= chr($this->Code[$i]);
        }
        // read exception table
        $this->ExceptionTableLength = $this->getJavaBinaryStream()->readUnsignedShort();
        for ($i = 0; $i < $this->ExceptionTableLength; $i++) {
            $this->ExceptionTables[$i] = new JavaStructureExceptionTable($this);
            $this->ExceptionTables[$i]->setStartPc($this->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setEndPc($this->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setHandlerPc($this->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setCatchType($this->getJavaBinaryStream()->readUnsignedShort());
        }
        $this->AttributesCount = $this->getJavaBinaryStream()->readUnsignedShort();
        for ($i = 0; $i < $this->AttributesCount; $i++) {
            $this->AttributeInfo[] = new JavaAttributeInfo($this);
        }
    }
    public function getExceptionTables () {
        return $this->ExceptionTables;
    }
    public function getCode () {
        return $this->RawCode;
    }
    public function getOpCodes () {
        return $this->Code;
    }
    public function getOpCodeLength () {
        return $this->CodeLength;
    }
}