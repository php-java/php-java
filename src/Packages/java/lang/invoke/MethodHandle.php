<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `MethodHandle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class MethodHandle extends _Object /* implements _List */
{

    /**
     * Makes an array-collecting method handle, which accepts a given number of positional arguments starting at a given position, and collects them into an array argument.
     * Makes an array-collecting method handle, which accepts a given number of trailing positional arguments and collects them into an array argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asCollector
     */
    public function asCollector($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a fixed arity method handle which is otherwise equivalent to the current method handle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asFixedArity
     */
    public function asFixedArity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes an array-spreading method handle, which accepts an array argument at a given position and spreads its elements as positional arguments in place of the array.
     * Makes an array-spreading method handle, which accepts a trailing array argument and spreads its elements as positional arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asSpreader
     */
    public function asSpreader($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces an adapter method handle which adapts the type of the current method handle to a new type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asType
     */
    public function asType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a variable arity adapter which is able to accept any number of trailing positional arguments and collect them into an array argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#asVarargsCollector
     */
    public function asVarargsCollector($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Binds a value x to the first argument of a method handle, without invoking it.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#bindTo
     */
    public function bindTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Invokes the method handle, allowing any caller type descriptor, and optionally performing conversions on arguments and return values.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invoke
     */
    public function invoke($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Invokes the method handle, allowing any caller type descriptor, but requiring an exact type match.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invokeExact
     */
    public function invokeExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Performs a variable arity invocation, passing the arguments in the given array to the method handle, as if via an inexact invoke from a call site which mentions only the type Object, and whose actual argument count is the length of the argument array.
     * Performs a variable arity invocation, passing the arguments in the given list to the method handle, as if via an inexact invoke from a call site which mentions only the type Object, and whose actual argument count is the length of the argument list.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invokeWithArguments
     */
    public function invokeWithArguments($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if this method handle supports variable arity calls.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#isVarargsCollector
     */
    public function isVarargsCollector($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the method handle, starting with the string "MethodHandle" and ending with the string representation of the method handle's type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reports the type of this method handle.
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

    /**
     * Adapts this method handle to be variable arity if the boolean flag is true, else fixed arity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#withVarargs
     */
    public function withVarargs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
