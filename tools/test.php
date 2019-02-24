<?php

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Imitation\java\lang\ArrayIndexOutOfBoundsException;

require __DIR__ . '/../vendor/autoload.php';

$javaClass = new \PHPJava\Core\JavaClass(
    new \PHPJava\Core\JavaClassReader(__DIR__ . '/Test.class')
);
$javaClass->getInvoker()->getStaticMethods()->main([111, 222, 333]);

$javaClass->getInvoker()->debug();
