<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JavaSingleClass;

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
     * @return array
     */
    public function __debugInfo()
    {
        return ($this->initializeIfNotInitiated())->__debugInfo();
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
            new JavaSingleClass(
                new $this->deferLoadingReaderClass(...$this->arguments),
                $this->options
            )
        );
    }
}
