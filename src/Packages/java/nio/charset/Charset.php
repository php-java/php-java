<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\nio\charset;

use PHPJava\Packages\java\lang\Object_;

class Charset extends Object_
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
