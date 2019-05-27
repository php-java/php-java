<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Packages\java\lang\NoSuchFieldException;

class PHPStaticField implements FieldInterface
{
    use FieldListable;

    /**
     * @var ClassInvokerInterface
     */
    private $javaClassInvoker;

    /**
     * @var \ReflectionProperty[]
     */
    private $fields = [];

    public function __construct(ClassInvokerInterface $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }

    /**
     * @throws NoSuchFieldException
     */
    public function get(string $name)
    {
        $this->javaClassInvoker
            ->getStatic()
            ->getMethods()
            ->callStaticInitializerIfNotInstantiated();

        if (!array_key_exists($name, $this->fields)) {
            throw new NoSuchFieldException('Tried to get undefined field ' . $name);
        }
        return $this->fields[$name]->getValue();
    }

    public function set(string $name, $value)
    {
        $this->fields[$name]->setValue(
            null,
            $value
        );
        return $this;
    }
}
