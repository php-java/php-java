<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JavaGenericClassInterface;

final class JavaClassDeferredLoader extends ClassDeferredLoader implements JavaClassInterface, JavaGenericClassInterface
{
    /**
     * @var string
     */
    private $loadingClassName;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var JavaClass
     */
    private $javaClass;

    public function __construct(
        string $loadingClassName,
        array $options = []
    ) {
        $this->loadingClassName = $loadingClassName;
        $this->options = $options;
    }

    /**
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     * @throws \PHPJava\Packages\java\lang\ClassNotFoundException
     */
    protected function initializeIfNotInitiated(): JavaClass
    {
        if (isset($this->javaClass)) {
            return $this->javaClass;
        }
        return $this->javaClass = JavaClass::load(
            $this->loadingClassName,
            $this->options
        );
    }
}
