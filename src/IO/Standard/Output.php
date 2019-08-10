<?php
namespace PHPJava\IO\Standard;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;

final class Output
{
    private static $outputHeapspace = '';

    private static function getOutputHandler()
    {
        static $outputHandle;
        if ($outputHandle === null) {
            $outputHandle = fopen(
                GlobalOptions::get('output.handler') ?? Runtime::OUTPUT_HANDLER,
                'rw'
            );
        }
        return $outputHandle;
    }

    public static function output(...$texts): void
    {
        if ((GlobalOptions::get('output.heapspace') ?? Runtime::OUTPUT_HEAPSPACE) === true) {
            foreach ($texts as $text) {
                static::$outputHeapspace .= (string) $text;
            }
        }

        foreach ($texts as $text) {
            fwrite(static::getOutputHandler(), (string) $text);
        }
    }

    public static function clearHeapspace()
    {
        static::$outputHeapspace = '';
    }

    public static function getHeapspace(bool $clearHeapspace = true): string
    {
        $return = static::$outputHeapspace;
        if ($clearHeapspace) {
            static::clearHeapspace();
        }
        return $return;
    }
}
