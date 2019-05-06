<?php
namespace PHPJava\Kernel\Internal;

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
        $this->initializeIfNotInitiated();
        return $this->javaClass->{$name}(...$arguments);
    }

    private function initializeIfNotInitiated()
    {
        if (isset($this->javaClass)) {
            return $this->javaClass;
        }
        $this->javaClass = new JavaClass(
            new $this->deferLoadingReaderClass(...$this->arguments),
            $this->options
        );
    }
}
