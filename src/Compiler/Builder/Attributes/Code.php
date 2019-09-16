<?php
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Core\JVM\Stream\BinaryWriter;

class Code extends Attribute
{
    protected $hasAttribute = true;

    protected $maxStacks = 0;
    protected $maxLocals = 0;
    protected $code = '';
    protected $exceptionTables = [];

    public function setMaxStacks(int $number): self
    {
        $this->maxStacks = $number;
        return $this;
    }

    public function setMaxLocals(int $number): self
    {
        $this->maxLocals = $number;
        return $this;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setExceptionTables(array $exceptionTables): self
    {
        $this->exceptionTables = $exceptionTables;
        return $this;
    }

    public function getValue(): string
    {
        $writer = new BinaryWriter(
            fopen('php://memory', 'r+')
        );

        // max stack
        $writer->writeUnsignedShort($this->maxStacks);

        // max locals
        $writer->writeUnsignedShort($this->maxLocals);

        // code length
        $writer->writeUnsignedInt(strlen($this->code));

        // code
        $writer->write($this->code);

        // exception_tables_length
        $writer->writeUnsignedShort(count($this->exceptionTables));

        // exception_tables
        foreach ($this->exceptionTables as [$startPc, $endPc, $handlerPc, $catchType]) {
            $writer->writeUnsignedShort($startPc);
            $writer->writeUnsignedShort($endPc);
            $writer->writeUnsignedShort($handlerPc);
            $writer->writeUnsignedShort($catchType);
        }

        // attributes length
        $writer->writeUnsignedShort(count($this->getAttributes()));

        // attributes
        foreach ($this->getAttributes() as $attribute) {
            /**
             * @var Attribute $attribute
             */
            $writer->write($attribute->getValue());
        }

        return $writer->getStreamContents();
    }
}
