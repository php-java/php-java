<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

interface GetFieldInterface
{
    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields);
    public function __get($name);
}
