<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\ClassInvokerInterface;

class JavaStaticField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;
    use FieldListable;

    /**
     * @var ClassInvokerInterface
     */
    private $javaClassInvoker;

    /**
     * @var mixed[]
     */
    private $fields = [];

    public function __construct(ClassInvokerInterface $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
