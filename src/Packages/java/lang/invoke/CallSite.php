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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dynamicInvoker
     */
    public function dynamicInvoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the target method of the call site, according to the behavior defined by this call site's specific class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getTarget
     */
    public function getTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Updates the target method of this call site, according to the behavior defined by this call site's specific class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setTarget
     */
    public function setTarget($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the type of this call site's target.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#type
     */
    public function type($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
