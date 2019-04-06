<?php
namespace PHPJava\Core\JVM\Parameters;

final class Runtime
{
    const ENTRYPOINT = null;

    const MAX_STACK_EXCEEDED = 9999;
    const STRICT = true;
    const PRELOAD = false;
    const DRY_RUN_ATTRIBUTE = false;

    const OPERATIONS_ENABLE_TRACE = true;
    const OPERATIONS_TEMPORARY_CODE_STREAM = 'php://memory';

    const VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY = false;

    const LOG_PATH = 'php://stdout';
    const LOG_LEVEL = 0;

}
