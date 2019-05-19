<?php
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\TypeResolver;

trait ArgumentsStringifyable
{
    protected function stringifyArguments(...$arguments): string
    {
        return Formatter::buildArgumentsSignature(
            array_map(
                function ($argument) {
                    return TypeResolver::convertPHPtoJava($argument);
                },
                $arguments
            )
        );
    }
}
