<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

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
        $this->MaxStack = $this->getCurrentClass()->readUnsignedShort();
        $this->MaxLocals = $this->getCurrentClass()->readUnsignedShort();
        $this->CodeLength = $this->getCurrentClass()->readUnsignedInt();
        // read opcode
        $this->Code = array();
        for ($i = 0; $i < $this->CodeLength; $i++) {
            $this->Code[$i] = $this->getCurrentClass()->readUnsignedByte();
            $this->RawCode .= chr($this->Code[$i]);
        }
        // read exception table
        $this->ExceptionTableLength = $this->getCurrentClass()->readUnsignedShort();
        for ($i = 0; $i < $this->ExceptionTableLength; $i++) {
            $this->ExceptionTables[$i] = new JavaStructureExceptionTable($this->getCurrentClass());
            $this->ExceptionTables[$i]->setStartPc($this->getCurrentClass()->readUnsignedShort());
            $this->ExceptionTables[$i]->setEndPc($this->getCurrentClass()->readUnsignedShort());
            $this->ExceptionTables[$i]->setHandlerPc($this->getCurrentClass()->readUnsignedShort());
            $this->ExceptionTables[$i]->setCatchType($this->getCurrentClass()->readUnsignedShort());
        }
        $this->AttributesCount = $this->getCurrentClass()->readUnsignedShort();
        for ($i = 0; $i < $this->AttributesCount; $i++) {
            $this->AttributeInfo[] = new JavaAttributeInfo($this->getCurrentClass());
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
