<?php

use PHPJava\Core\JVM\Parameters\GlobalOptions;

GlobalOptions::set([
    'output' => [
        'handler' => '/dev/null',
        'heapspace' => true,
    ],
    'operations' => [
        'enable_trace' => true,
    ],
]);
