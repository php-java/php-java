<?php

use PHPJava\Core\JavaClassInvoker;

require __DIR__ . '/../vendor/autoload.php';

$javaClass = new \PHPJava\Core\JavaClass(
    new \PHPJava\Core\JavaClassReader(__DIR__ . '/Test.class')
);
$invoker = new JavaClassInvoker($javaClass);
var_dump($invoker->getDynamicMethods()->main([999, 222, 3333]));
