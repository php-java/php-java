<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `SwitchPoint` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class SwitchPoint extends _Object
{

    /**
     * Returns a method handle which always delegates either to the target or the fallback.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#guardWithTest
     */
    public function guardWithTest($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if this switch point has been invalidated yet.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasBeenInvalidated
     */
    public function hasBeenInvalidated($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets all of the given switch points into the invalid state.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invalidateAll
     */
    public static function invalidateAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
