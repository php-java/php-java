<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\JavaGenericClassInterface;
use PHPJava\Core\Stream\Reader\InlineReader;

final class JavaInlineClassDeferredLoader extends ClassDeferredLoader implements JavaClassInterface, JavaGenericClassInterface
{
    /**
     * @var string[]
     */
    private $arguments = [];
    /**
     * @var array
     */
    private $options = [];
    /**
     * @var JavaClass
     */
    private $javaClass;

    public function __construct(
        array $arguments = [],
        array $options = []
    ) {
        $this->arguments = $arguments;
        $this->options = $options;
    }

    /**
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    protected function initializeIfNotInitiated(): JavaClass
    {
        if (isset($this->javaClass)) {
            return $this->javaClass;
        }
        return $this->javaClass = new JavaClass(
            new JavaCompiledClass(
                new InlineReader(...$this->arguments),
                $this->options
            )
        );
    }
}
