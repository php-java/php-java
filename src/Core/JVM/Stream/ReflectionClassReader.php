<?php
namespace PHPJava\Core\JVM\Stream;

class ReflectionClassReader implements StreamReaderInterface
{
    /**
     * @var resource
     */
    private $handle;

    /**
     * @param resource $handle
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }
}
