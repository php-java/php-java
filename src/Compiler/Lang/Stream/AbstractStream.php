<?php
namespace PHPJava\Compiler\Lang\Stream;

use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Utilities\Formatter;

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

    /**
     * @return resource
     */
    public function getDistributeStreamByClassPath(string $classPath)
    {
        if (!isset($this->distributeDirectory)) {
            throw new AssembleStructureException(
                'Distribution directory is not set. ' .
                'You must to set distribution directory with the `setDistributeDirectory` method on StreamInterface.'
            );
        }

        [$namespace, $className] = Formatter::getNamespaceAndClassName($classPath);
        $path = $this->distributeDirectory . '/' . implode('/', $namespace);
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        return fopen(
            $path . '/' . $className . '.class',
            'w+'
        );
    }
}
