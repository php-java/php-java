<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\InvalidArgumentException;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Packages\java\util\IllegalFormatException;

class PrintStream
{
    private $sequence = '';

    public function println(...$arguments)
    {
        $length = count($arguments);
        if ($length > 1) {
            throw new InvalidArgumentException(
                "The argument array should have 0 or 1 element, but has {$length} elements."
            );
        }

        if ($length === 0) {
            echo "\n";
            return;
        }

        $arg = $arguments[0];

        if ($arg instanceof Utf8Info) {
            echo $arg->getString() . "\n";
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof PrimitiveValueInterface
        ) {
            echo $arg . "\n";
            return;
        }

        if ($arg instanceof JavaClass) {
            echo $arg . "\n";
            return;
        }

        $type = gettype($arg);

        if ($type === 'NULL') {
            echo "null\n";
            throw new NullPointerException();
        }

        throw new IllegalFormatException('Cannot pass "' . ($type === 'object' ? get_class($arg) : $type) . '" in ' . __METHOD__);
    }

    public function print($arg)
    {
        if ($arg instanceof Utf8Info) {
            echo $arg->getString();
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof PrimitiveValueInterface
        ) {
            echo $arg;
            return;
        }

        if ($arg instanceof JavaClass) {
            echo $arg;
            return;
        }

        $type = gettype($arg);

        if ($type === 'NULL') {
            echo 'null';
            throw new NullPointerException();
        }

        throw new IllegalFormatException('Cannot pass "' . ($type === 'object' ? get_class($arg) : $type) . '" in ' . __METHOD__);
    }

    public function append($string)
    {
        $this->sequence .= $string;
        return $this;
    }
}
