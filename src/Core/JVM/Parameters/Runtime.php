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

    const OPERATIONS_ENABLE_TRACE = false;
    const OPERATIONS_TEMPORARY_CODE_STREAM = 'php://memory';

    const VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY = false;

    const OUTPUT_HANDLER = 'php://stdout';
    const OUTPUT_HEAPSPACE = false;

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
        'Void' => '_Void',
    ];

    const CLASS_INITIALIZER_CLASS_MAPS = [
        '__construct' => '<init>',
        '__staticConstruct' => '<clinit>',
    ];

    const PHP_PACKAGES_NAMESPACE = 'PHPJava\\Packages';
    const MNEMONIC_NAMESPACE = 'PHPJava\\Kernel\\Mnemonics';
    const EMULATOR_MNEMONIC_NAMESPACE = 'PHPJava\\Compiler\\Emulator\\Mnemonics';
    const BUILD_PACKAGE_NAMESPACE = 'PHPJava\\Compiler\\Lang\\Assembler\\Bundler\\Packages\\';

    const PHP_STANDARD_CLASS_NAME = 'PHPRuntime.PHPStandard';
    const PHP_STANDARD_CLASS_METHOD_PREFIX = 'PHP_STANDARD@';

    const PREFIX_STATIC = 'static_';
    const PREFIX_DEFAULT = '__default_';
}
