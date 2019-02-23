<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class CodeAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $maxStack = null;
    private $maxLocals = null;
    private $codeLength = null;
    private $rawCode = '';
    private $code = array();
    private $exceptionTableLength = null;
    private $exceptionTables = array();
    private $attributeInfo = array();
    public function execute(): void
    {
        $this->maxStack = $this->readUnsignedShort();
        $this->maxLocals = $this->readUnsignedShort();
        $this->codeLength = $this->readUnsignedInt();
        // read opcode
        $this->code = array();
        for ($i = 0; $i < $this->codeLength; $i++) {
            $this->code[$i] = $this->readUnsignedByte();
            $this->rawCode .= chr($this->code[$i]);
        }
        // read exception table
        $this->exceptionTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->exceptionTableLength; $i++) {
            $this->exceptionTables[$i] = new JavaStructureExceptionTable($this);
            $this->exceptionTables[$i]->setStartPc($this->readUnsignedShort());
            $this->exceptionTables[$i]->setEndPc($this->readUnsignedShort());
            $this->exceptionTables[$i]->setHandlerPc($this->readUnsignedShort());
            $this->exceptionTables[$i]->setCatchType($this->readUnsignedShort());
        }
        $this->attributesCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->attributesCount; $i++) {
            $this->attributeInfo[] = new \PHPJava\Kernel\Attributes\AttributeInfo($this);
        }
    }
    public function getExceptionTables()
    {
        return $this->exceptionTables;
    }
    public function getCode()
    {
        return $this->rawCode;
    }
    public function getOpCodes()
    {
        return $this->code;
    }
    public function getOpCodeLength()
    {
        return $this->codeLength;
    }
}
