<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

interface FieldInterface
{
    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields);

    public function get(string $name);

    public function set(string $name, $value);
}
