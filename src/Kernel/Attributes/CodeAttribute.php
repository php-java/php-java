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
    private $code = [];
    private $exceptionTableLength = null;
    private $exceptionTables = [];
    private $attributeInfo = [];
    private $attributeCount = 0;

    public function execute(): void
    {
        $this->maxStack = $this->readUnsignedShort();
        $this->maxLocals = $this->readUnsignedShort();
        $this->codeLength = $this->readUnsignedInt();

        // read Mnemonics
        $this->code = [];
        for ($i = 0; $i < $this->codeLength; $i++) {
            $this->code[$i] = $this->readUnsignedByte();
            $this->rawCode .= chr($this->code[$i]);
        }

        // read exception table
        $this->exceptionTableLength = $this->readUnsignedShort();
        for ($i = 0; $i < $this->exceptionTableLength; $i++) {
            $exceptionTable = new \PHPJava\Kernel\Structures\_ExceptionTable($this->reader);
            $exceptionTable->setConstantPool($this->getConstantPool());
            $exceptionTable->setStartPc($this->readUnsignedShort())
                ->setEndPc($this->readUnsignedShort())
                ->setHandlerPc($this->readUnsignedShort())
                ->setCatchType($this->readUnsignedShort())
                ->execute();
            $this->exceptionTables[] = $exceptionTable;
        }

        $this->attributeCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->attributeCount; $i++) {
            $attributeInfo = new \PHPJava\Kernel\Attributes\AttributeInfo($this->reader);
            $attributeInfo->setConstantPool($this->getConstantPool());
            $attributeInfo->execute();
            $this->attributeInfo[] = $attributeInfo;
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
        return (int) $this->codeLength;
    }
}
