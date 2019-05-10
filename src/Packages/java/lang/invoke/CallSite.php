<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `CallSite` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class CallSite extends _Object
{
    /**
     * Produces a method handle equivalent to an invokedynamic instruction which has been linked to this call site.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dynamicInvoker
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function dynamicInvoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the target method of the call site, according to the behavior defined by this call site's specific class.
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
     * Updates the target method of this call site, according to the behavior defined by this call site's specific class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setTarget
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the type of this call site's target.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#type
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function type($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
