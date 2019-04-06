<?php
namespace PHPJava\Core\JVM\Parameters;

final class Runtime
{
    const ENTRYPOINT = null;

    const MAX_STACK_EXCEEDED = 9999;
    const STRICT = true;

    const VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY = false;

    const LOG_PATH = 'php://stdout';
    const LOG_LEVEL = 0;

    const TEMPORARY_STREAM = 'php://memory';
}
