<?php
namespace PHPJava\Packages\java\net\Proxy;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `Type` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class Type extends Enum /* implements Serializable, Comparable */
{
    /*
     * Represents a direct connection, or the absence of a proxy.
     */
    const DIRECT = 'DIRECT';

    /*
     * Represents proxy for high level protocols such as HTTP or FTP.
     */
    const HTTP = 'HTTP';

    /*
     * Represents a SOCKS (V4 or V5) proxy.
     */
    const SOCKS = 'SOCKS';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
