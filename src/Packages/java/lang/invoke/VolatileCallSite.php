<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `VolatileCallSite` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\invoke\CallSite
 */
class VolatileCallSite extends CallSite
{
    /**
     * Returns the target method of the call site, which behaves like a volatile field of the VolatileCallSite.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getTarget
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Updates the target method of this call site, as a volatile variable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setTarget
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
