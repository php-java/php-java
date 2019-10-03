<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Map;

use PHPJava\Kernel\Types\_Int;

class Constants
{
    const BASED = \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Constants::class;

    const MAP = [
        'PHP_VERSION' => [
            'getPHPVersion',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_MAJOR_VERSION' => [
            'getPHPMajorVersion',
            [],
            _Int::class,
        ],
        'PHP_MINOR_VERSION' => [
            'getPHPMinorVersion',
            [],
            _Int::class,
        ],
        'PHP_RELEASE_VERSION' => [
            'getPHPReleaseVersion',
            [],
            _Int::class,
        ],
        'PHP_VERSION_ID' => [
            'getPHPVersionId',
            [],
            _Int::class,
        ],
        'PHP_EXTRA_VERSION' => [
            'getPHPExtraVersion',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_EOL' => [
            'getPHPEOL',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_INT_MAX' => [
            'getPHPIntMax',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_INT_MIN' => [
            'getPHPIntMin',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_FLOAT_EPSILON' => [
            'getPHPFloatEpsilon',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_FLOAT_MIN' => [
            'getPHPFloatMin',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
        'PHP_FLOAT_MAX' => [
            'getPHPFloatMax',
            [],
            \PHPJava\Packages\java\lang\_String::class,
        ],
    ];
}
