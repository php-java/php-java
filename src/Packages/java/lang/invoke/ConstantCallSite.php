<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `ConstantCallSite` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\invoke\CallSite
 */
class ConstantCallSite extends CallSite
{
    /**
     * Returns this call site's permanent target.
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
     * Returns the target method of the call site, which behaves like a final field of the ConstantCallSite.
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
     * Always throws an UnsupportedOperationException.
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
