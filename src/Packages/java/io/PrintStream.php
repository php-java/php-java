<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\util\IllegalFormatException;

class PrintStream
{
    private $sequence = '';

    public function println($arg)
    {
        if ($arg instanceof _Utf8) {
            echo $arg->getString() . "\n";
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof Type ||
            $arg instanceof \PHPJava\Packages\java\lang\_Object
        ) {
            echo $arg . "\n";
            return;
        }

        $type = gettype($arg);
        throw new IllegalFormatException('Cannot pass "' . ($type === 'object' ? get_class($arg) : $type) . '" in ' . __METHOD__);
    }

    public function print($arg)
    {
        if ($arg instanceof _Utf8) {
            echo $arg->getString();
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof Type ||
            $arg instanceof \PHPJava\Packages\java\lang\_Object
        ) {
            echo $arg;
            return;
        }

        throw new IllegalFormatException('Cannot pass "' . ($type === 'object' ? get_class($arg) : $type) . '" in ' . __METHOD__);
    }

    public function append($string)
    {
        $this->sequence .= $string;
        return $this;
    }
}
