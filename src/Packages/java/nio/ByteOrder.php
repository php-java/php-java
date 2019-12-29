<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\nio;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `ByteOrder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ByteOrder extends _Object
{
    /**
     * Constant denoting big-endian byte order.
     *
     * @var mixed $BIG_ENDIAN
     */
    public static $BIG_ENDIAN = null;

    /**
     * Constant denoting little-endian byte order.
     *
     * @var mixed $LITTLE_ENDIAN
     */
    public static $LITTLE_ENDIAN = null;

    /**
     * Retrieves the native byte order of the underlying platform.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#nativeOrder
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nativeOrder($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a string describing this object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
