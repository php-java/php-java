<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

/**
 * The `SwitchPoint` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class SwitchPoint extends Object_
{
    /**
     * Returns a method handle which always delegates either to the target or the fallback.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#guardWithTest
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function guardWithTest($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if this switch point has been invalidated yet.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasBeenInvalidated
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasBeenInvalidated($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets all of the given switch points into the invalid state.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invalidateAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function invalidateAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
