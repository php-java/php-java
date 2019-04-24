<?php

use PHPJava\Core\JavaArchive;
use PHPJava\Core\PHPJava;

require __DIR__ . '/../vendor/autoload.php';

if (!isset($argv[1])) {
    echo "First parameter is needed.\n";
    return;
}

$jar = new JavaArchive($argv[1]);
$jar->execute(
    ...(empty($arguments) ? [[]] : array_slice($argv, 2))
);
