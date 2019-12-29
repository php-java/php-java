<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

/**
 * The `MethodHandleProxies` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class MethodHandleProxies extends Object_
{
    /**
     * Produces an instance of the given single-method interface which redirects its calls to the given method handle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asInterfaceInstance
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function asInterfaceInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given object was produced by a call to asInterfaceInstance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#isWrapperInstance
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function isWrapperInstance($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces or recovers a target method handle which is behaviorally equivalent to the unique method of this wrapper instance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrapperInstanceTarget
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function wrapperInstanceTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Recovers the unique single-method interface type for which this wrapper instance was created.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrapperInstanceType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function wrapperInstanceType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
