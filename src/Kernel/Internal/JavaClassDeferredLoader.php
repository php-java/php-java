<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;

final class JavaClassDeferredLoader implements JavaClassInterface
{
    /**
     * @var string
     */
    private $deferLoadingReaderClass;

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
        string $deferLoadingReaderClass,
        array $arguments = [],
        array $options = []
    ) {
        $this->deferLoadingReaderClass = $deferLoadingReaderClass;
        $this->arguments = $arguments;
        $this->options = $options;
    }

    /**
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    public function __call(string $name, $arguments)
    {
        return ($this->initializeIfNotInitiated())->{$name}(...$arguments);
    }

    /**
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    public function __invoke(...$arguments): JavaClassInterface
    {
        return ($this->initializeIfNotInitiated())(...$arguments);
    }

    /**
     * @return mixed|string
     */
    public function getClassName(bool $shortName = false)
    {
        return str_replace('/', '.', $this->arguments[0]);
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
