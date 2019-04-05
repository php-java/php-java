<?php
namespace PHPJava\Imitation\java\io;

use PHPJava\Imitation\java\util\IllegalFormatException;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\Type;

class PrintStream
{
    private $sequence = '';
    public function println($arg)
    {
        if ($arg instanceof _Utf8) {
            echo $arg->getString() . "\n";
            return;
        }
        if (is_string($arg) ||
            is_int($arg) ||
            $arg instanceof Type ||
            $arg instanceof \PHPJava\Imitation\java\lang\_String
        ) {
            echo $arg . "\n";
            return;
        }

        throw new IllegalFormatException('Cannot pass "' . gettype($arg) . '" in ' . __METHOD__);
    }

    public function print($arg)
    {
        if ($arg instanceof _Utf8) {
            echo $arg->getString();
            return;
        }
        if (is_string($arg) ||
            is_int($arg) ||
            $arg instanceof Type ||
            $arg instanceof \PHPJava\Imitation\java\lang\_String
        ) {
            echo $arg;
            return;
        }

        throw new IllegalFormatException('Cannot pass "' . gettype($arg) . '" in ' . __METHOD__);
    }

    public function append($string)
    {
        $this->sequence .= $string;
        return $this;
    }
}
