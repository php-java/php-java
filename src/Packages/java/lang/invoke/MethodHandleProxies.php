<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `MethodHandleProxies` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class MethodHandleProxies extends _Object
{

    /**
     * Produces an instance of the given single-method interface which redirects its calls to the given method handle.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asInterfaceInstance
     */
    public static function asInterfaceInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given object was produced by a call to asInterfaceInstance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#isWrapperInstance
     */
    public static function isWrapperInstance($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces or recovers a target method handle which is behaviorally equivalent to the unique method of this wrapper instance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrapperInstanceTarget
     */
    public static function wrapperInstanceTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Recovers the unique single-method interface type for which this wrapper instance was created.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrapperInstanceType
     */
    public static function wrapperInstanceType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
