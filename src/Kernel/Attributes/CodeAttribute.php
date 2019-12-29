<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class CodeAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $maxStack;

    /**
     * @var int
     */
    private $maxLocals;

    /**
     * @var int
     */
    private $codeLength;

    /**
     * @var string
     */
    private $rawCode = '';

    /**
     * @var int[]
     */
    private $code = [];

    /**
     * @var int
     */
    private $exceptionTableLength;

    /**
     * @var \PHPJava\Kernel\Structures\ExceptionTable[]
     */
    private $exceptionTables = [];

    /**
     * @var \PHPJava\Kernel\Attributes\AttributeInfo[]
     */
    private $attributeInfo = [];

    /**
     * @var int
     */
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
            $exceptionTable = new \PHPJava\Kernel\Structures\ExceptionTable($this->reader);
            $exceptionTable->setConstantPool($this->getConstantPool());
            $exceptionTable->setDebugTool($this->getDebugTool());
            $exceptionTable->execute();
            $this->exceptionTables[] = $exceptionTable;
        }

        $this->attributeCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->attributeCount; $i++) {
            $attributeInfo = new \PHPJava\Kernel\Attributes\AttributeInfo($this->reader);
            $attributeInfo->setConstantPool($this->getConstantPool());
            $attributeInfo->setDebugTool($this->getDebugTool());
            $attributeInfo->execute();
            $this->attributeInfo[] = $attributeInfo;
        }
    }

    /**
     * @return \PHPJava\Kernel\Structures\ExceptionTable[]
     */
    public function getExceptionTables(): array
    {
        return $this->exceptionTables;
    }

    public function getCode(): string
    {
        return $this->rawCode;
    }

    public function getOpCodes(): int
    {
        return $this->code;
    }

    public function getOpCodeLength(): int
    {
        return (int) $this->codeLength;
    }
}
