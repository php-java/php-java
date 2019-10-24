<?php
namespace PHPJava\Compiler\Lang\Stream;

use PHPJava\Exceptions\AssembleStructureException;

abstract class AbstractStream implements StreamReaderInterface
{
    protected $filePath;
    protected $source;
    protected $distributeDirectory;

    abstract public function __construct($source);

    public function getCode(): string
    {
        return $this->source;
    }

    public function getFilePath(): string
    {
        if ($this->filePath === null) {
            throw new AssembleStructureException(
                'File path is not specified.'
            );
        }
        return $this->filePath;
    }

    public function setDistributeDirectory(string $path): StreamReaderInterface
    {
        $this->distributeDirectory = $path;
        return $this;
    }

    public function getDistributeDirectory(): string
    {
        if (!isset($this->distributeDirectory)) {
            throw new AssembleStructureException(
                'Distribution directory is not set. ' .
                'You must to set distribution directory with the `setDistributeDirectory` method on StreamInterface.'
            );
        }
        return $this->distributeDirectory;
    }
}
