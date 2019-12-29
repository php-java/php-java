<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Structures\MethodInfo;

class Lambda implements JavaClassInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $class;

    /**
     * @var MethodInfo|\ReflectionMethod
     */
    private $methodEntity;

    /**
     * @var JavaClassInterface|string
     */
    private $classObject;

    public function __construct(JavaClassInterface $javaClass, string $invokedName, string $name, string $descriptor, string $class)
    {
        $this->name = $name;
        $this->descriptor = $descriptor;
        $this->class = $class;

        $this->methodEntity = [
            $name,
            $invokedName,
            $javaClass,
        ];

        $this->classObject = JavaClass::load(
            $class,
            $javaClass->getOptions()
        );
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        return $this->classObject->{$name}(...$arguments);
    }

    public function __invoke(string $name, ...$arguments)
    {
        [$actualMethodName, $entityMethodName, $referredClassObject] = $this->methodEntity;

        return $referredClassObject
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $actualMethodName,
                ...$arguments
            );
    }
}
