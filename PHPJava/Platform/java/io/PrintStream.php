<?php
// print stream
namespace java\io;

class PrintStream {

    public function println ($arg) {

        // JavaStructureUtf8で定義されている場合
        if ($arg instanceof \JavaStructureUtf8) {

            // print stream
            echo $arg->getString() . "\n";

        } else if (is_string($arg) ||
                is_int($arg) ||
                $arg instanceof \JavaType ||
                $arg instanceof \java\lang\String) {

            echo $arg . "\n";

        } else if ($arg === null) {

            echo "\n";

        } else {

            throw new \JavaPlatformException('cannot convert to string');

        }

    }

}
