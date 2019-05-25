<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\ClassInvokerInterface;

interface FieldInterface
{
    public function __construct(ClassInvokerInterface $javaClassInvoker, array $fields);

    public function get(string $name);

    public function set(string $name, $value);
}
