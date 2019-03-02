<?php
namespace PHPJava\Imitation\java\net;

use PHPJava\Imitation\java\lang\_Object;

class URLEncoder extends _Object
{

    /**
     * This method wrapped PHP's urlencoder
     *
     * @param string $s
     * @param string $enc
     * @return string
     */
    public static function encode(string $s, string $enc)
    {
        return rawurlencode($s);
    }
}
