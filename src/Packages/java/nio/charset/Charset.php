<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\nio\charset;

use PHPJava\Packages\java\lang\_Object;

class Charset extends _Object
{
    /**
     * This method wrapped PHP's urldecoder.
     *
     * @return string
     */
    public static function static_decode(string $s, string $enc)
    {
        return rawurldecode($s);
    }
}
