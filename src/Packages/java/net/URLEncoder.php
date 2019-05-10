<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `URLEncoder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class URLEncoder extends _Object
{
    /**
     * Deprecated.The resulting string may vary depending on the platform's             default encoding.
     * Translates a string into application/x-www-form-urlencoded format using a specific encoding scheme.
     * Translates a string into application/x-www-form-urlencoded format using a specific Charset.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#encode
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_encode($a = null, $b = null)
    {
        return rawurlencode($a);
    }
}
