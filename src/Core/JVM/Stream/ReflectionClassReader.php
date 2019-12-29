<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Stream;

use PHPJava\Core\JVM\Parameters\Runtime;

class ReflectionClassReader implements StreamReaderInterface
{
    /**
     * @var \ReflectionClass
     */
    private $handle;

    /**
     * @param \ReflectionClass $handle
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return \ReflectionProperty[]
     */
    public function getFields()
    {
        $fields = [];
        foreach ($this->handle->getProperties() as $field) {
            $fieldName = static::removePrefixes($field->getName());
            $fields[Runtime::CLASS_INITIALIZER_CLASS_MAPS[$fieldName] ?? $fieldName] = $field;
        }

        return $fields;
    }

    /**
     * @return \ReflectionMethod[][]
     */
    public function getMethods()
    {
        $methods = [];
        foreach ($this->handle->getMethods() as $method) {
            $methodName = static::removePrefixes($method->getName());
            $methods[Runtime::CLASS_INITIALIZER_CLASS_MAPS[$methodName] ?? $methodName][] = $method;
        }

        return $methods;
    }

    private static function removePrefixes(string $name): string
    {
        return str_replace(
            [
                Runtime::PREFIX_STATIC,
                Runtime::PREFIX_DEFAULT,
            ],
            '',
            $name
        );
    }
}
