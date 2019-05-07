<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\StackWalker\StackFrame;
// use PHPJava\Packages\java\util\function\Consumer;
// use PHPJava\Packages\java\util\Set;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `StackWalker` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StackWalker extends _Object /* implements StackFrame, Consumer, Set, Stream */
{

    /**
     * Performs the given action on each element of StackFrame stream of the current thread, traversing from the top frame of the stack, which is the method calling this forEach method.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#forEach
     */
    public function forEach($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the Class object of the caller who invoked the method that invoked getCallerClass.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getCallerClass
     */
    public function getCallerClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a StackWalker instance.
     * Returns a StackWalker instance with the given option specifying the stack frame information it can access.
     * Returns a StackWalker instance with the given options specifying the stack frame information it can access.
     * Returns a StackWalker instance with the given options specifying the stack frame information it can access.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getInstance
     */
    public static function static_getInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Applies the given function to the stream of StackFrames for the current thread, traversing from the top frame of the stack, which is the method calling this walk method.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#walk
     */
    public function walk($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
