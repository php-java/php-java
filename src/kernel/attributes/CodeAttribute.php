<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class CodeAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

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
        $this->MaxStack = $this->readUnsignedShort();
        $this->MaxLocals = $this->readUnsignedShort();
        $this->CodeLength = $this->readUnsignedInt();
        // read opcode
        $this->Code = array();
        for ($i = 0; $i < $this->CodeLength; $i++) {
            $this->Code[$i] = $this->readUnsignedByte();
            $this->RawCode .= chr($this->Code[$i]);
        }
        // read exception table
        $this->ExceptionTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->ExceptionTableLength; $i++) {
            $this->ExceptionTables[$i] = new JavaStructureExceptionTable($this);
            $this->ExceptionTables[$i]->setStartPc($this->readUnsignedShort());
            $this->ExceptionTables[$i]->setEndPc($this->readUnsignedShort());
            $this->ExceptionTables[$i]->setHandlerPc($this->readUnsignedShort());
            $this->ExceptionTables[$i]->setCatchType($this->readUnsignedShort());
        }
        $this->AttributesCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->AttributesCount; $i++) {
            $this->AttributeInfo[] = new JavaAttributeInfo($this);
        }
    }
    public function getExceptionTables()
    {
        return $this->ExceptionTables;
    }
    public function getCode()
    {
        return $this->RawCode;
    }
    public function getOpCodes()
    {
        return $this->Code;
    }
    public function getOpCodeLength()
    {
        return $this->CodeLength;
    }
}
