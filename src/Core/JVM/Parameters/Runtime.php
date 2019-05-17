<?php
namespace PHPJava\Core\JVM\Parameters;

use Monolog\Logger;

final class Runtime
{
    const ENTRYPOINT = null;

    const MAX_STACK_EXCEEDED = 9999;
    const MAX_EXECUTION_TIME = 5;
    const STRICT = true;
    const DRY_RUN_ATTRIBUTE = false;

    const OPERATIONS_ENABLE_TRACE = true;
    const OPERATIONS_TEMPORARY_CODE_STREAM = 'php://memory';

    const VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY = false;

    const LOG_PATH = 'php://stderr';
    const LOG_LEVEL = Logger::EMERGENCY;

    const LOAD_ATTRIBUTES = [
        'Code',
        'Exceptions',
        'SourceFile',
        'InnerClasses',
        'BootstrapMethods',
    ];

    const PHP_PACKAGES_MAPS = [
        'String' => '_String',
        'Object' => '_Object',
    ];

    const PHP_PACKAGES_DIRECTORY = '\\PHPJava\\Packages';

    const PREFIX_STATIC = 'static_';
}
