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

    public function __construct(
        string $deferLoadingReaderClass,
        array $arguments = [],
        array $options = []
    ) {
        $this->deferLoadingReaderClass = $deferLoadingReaderClass;
        $this->arguments = $arguments;
        $this->options = $options;
    }

    public function __call($name, $arguments)
    {
        return ($this->initializeIfNotInitiated())->{$name}(...$arguments);
    }

    public function __invoke(...$arguments): JavaClassInterface
    {
        ;
        return ($this->initializeIfNotInitiated())(...$arguments);
    }

    private function initializeIfNotInitiated()
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
