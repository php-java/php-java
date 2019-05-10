<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;

final class JavaClassDeferredLoader implements JavaClassInterface
{
    private $deferLoadingReaderClass;
    private $arguments = [];
    private $options = [];
    private $javaClass;

    /**
     * JavaClassDeferredLoader constructor.
     */
    public function __construct(
        string $deferLoadingReaderClass,
        array $arguments = [],
        array $options = []
    ) {
        $this->deferLoadingReaderClass = $deferLoadingReaderClass;
        $this->arguments = $arguments;
        $this->options = $options;
    }

    /**
     * @param $name
     * @param $arguments
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    public function __call($name, $arguments)
    {
        return ($this->initializeIfNotInitiated())->{$name}(...$arguments);
    }

    /**
     * @param mixed ...$arguments
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    public function __invoke(...$arguments): JavaClassInterface
    {
        return ($this->initializeIfNotInitiated())(...$arguments);
    }

    /**
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    private function initializeIfNotInitiated(): JavaClass
    {
        if (isset($this->javaClass)) {
            return $this->javaClass;
        }
        return $this->javaClass = new JavaClass(
            new $this->deferLoadingReaderClass(...$this->arguments),
            $this->options
        );
    }
}
