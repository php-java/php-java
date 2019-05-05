<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\invoke\CallSite;

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
     * Returns the target method of the call site, which behaves like a final field of the ConstantCallSite.
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
     * Always throws an UnsupportedOperationException.
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
}
