<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Utilities\Formatter;

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
