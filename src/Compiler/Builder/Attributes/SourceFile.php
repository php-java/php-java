<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Core\JVM\Stream\BinaryWriter;

class SourceFile extends Attribute
{
    /**
     * @var ConstantPoolFinderResult
     */
    protected $finderResult;

    public function setFileNameIndexInConstantPool(ConstantPoolFinderResult $finderResult): self
    {
        $this->finderResult = $finderResult;
        return $this;
    }

    public function getValue(): string
    {
        $writer = new BinaryWriter(
            fopen('php://memory', 'r+')
        );

        $writer->writeUnsignedShort(
            $this->finderResult
                ->getResult()
                ->getEntryIndex()
        );

        return $writer->getStreamContents();
    }
}
