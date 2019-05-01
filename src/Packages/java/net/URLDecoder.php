<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `URLDecoder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class URLDecoder extends _Object
{

    /**
     * Deprecated.The resulting string may vary depending on the platform's          default encoding.
     * Decodes an application/x-www-form-urlencoded string using a specific encoding scheme.
     * Decodes an application/x-www-form-urlencoded string using a specific Charset.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#decode
     */
    public static function static_decode($a = null, $b = null)
    {
        return rawurldecode($a);
    }
}
