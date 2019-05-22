<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\JavaClassInvokerInterface;

interface FieldInterface
{
    public function __construct(JavaClassInvokerInterface $javaClassInvoker, array $fields);

    public function get(string $name);

    public function set(string $name, $value);
}
