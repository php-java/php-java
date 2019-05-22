<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClassInterface;

class Lambda
{
    /**
     * @var JavaClassInterface
     */
    private $javaClass;

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
     * @var string
     */
    private $resourceType;

    /**
     * @var JavaClassInterface|string
     */
    private $classObject;

    public function __construct(JavaClassInterface $javaClass, string $name, string $descriptor, string $class)
    {
        $this->javaClass = $javaClass;
        $this->name = $name;
        $this->descriptor = $descriptor;
        $this->class = $class;

        [$this->resourceType, $this->classObject] = $javaClass
            ->getOptions('class_resolver')
            ->resolve($this->class);
    }

    public function __invoke(...$arguments)
    {
        return $this->javaClass
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $this->name,
                ...$arguments
            );
    }
}
