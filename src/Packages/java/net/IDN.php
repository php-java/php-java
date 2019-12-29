<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

/**
 * The `IDN` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class IDN extends Object_
{
    /**
     * Flag to allow processing of unassigned code points.
     *
     * @var mixed $ALLOW_UNASSIGNED
     */
    public static $ALLOW_UNASSIGNED = null;

    /**
     * Flag to turn on the check against STD-3 ASCII rules.
     *
     * @var mixed $USE_STD3_ASCII_RULES
     */
    public static $USE_STD3_ASCII_RULES = null;

    /**
     * Translates a string from Unicode to ASCII Compatible Encoding (ACE), as defined by the ToASCII operation of RFC 3490.
     * Translates a string from Unicode to ASCII Compatible Encoding (ACE), as defined by the ToASCII operation of RFC 3490.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#toASCII
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_toASCII($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Translates a string from ASCII Compatible Encoding (ACE) to Unicode, as defined by the ToUnicode operation of RFC 3490.
     * Translates a string from ASCII Compatible Encoding (ACE) to Unicode, as defined by the ToUnicode operation of RFC 3490.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#toUnicode
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_toUnicode($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
