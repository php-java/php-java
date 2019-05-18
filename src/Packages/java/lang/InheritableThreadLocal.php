<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\ThreadLocal;


/**
 * The `InheritableThreadLocal` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\ThreadLocal
 */
class InheritableThreadLocal extends ThreadLocal
{

    /**
     * Computes the child's initial value for this inheritable thread-local variable as a function of the parent's value at the time the child thread is created.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#childValue
     */
    protected function childValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
