<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\ClassDeferredLoaderException;

class ClassDeferredLoader
{
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
     * @throws ClassDeferredLoaderException
     */
    protected function initializeIfNotInitiated(): JavaClass
    {
        throw new ClassDeferredLoaderException('Failed to load a non-specified class.');
    }
}
