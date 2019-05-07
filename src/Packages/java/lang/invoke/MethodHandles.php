<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;

// use PHPJava\Packages\java\util\_List;
// use PHPJava\Packages\java\lang\reflect\Member;

/**
 * The `MethodHandles` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class MethodHandles extends _Object /* implements _List, Member */
{

    /**
     * Produces a method handle constructing arrays of a desired type, as if by the anewarray bytecode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayConstructor
     */
    public static function arrayConstructor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving read access to elements of an array, as if by the aaload bytecode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementGetter
     */
    public static function arrayElementGetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving write access to elements of an array, as if by the astore bytecode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementSetter
     */
    public static function arrayElementSetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of an array of type arrayClass.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementVarHandle
     */
    public static function arrayElementVarHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle returning the length of an array, as if by the arraylength bytecode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayLength
     */
    public static function arrayLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of a byte[] array viewed as if it were a different primitive array type, such as int[] or long[].
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#byteArrayViewVarHandle
     */
    public static function byteArrayViewVarHandle($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of a ByteBuffer viewed as if it were an array of elements of a different primitive component type to that of byte, such as int[] or long[].
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#byteBufferViewVarHandle
     */
    public static function byteBufferViewVarHandle($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle which adapts a target method handle, by running it inside an exception handler.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#catchException
     */
    public static function catchException($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing a sub-sequence of its arguments with a filter (another method handle).
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#collectArguments
     */
    public static function collectArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle of the requested return type which returns the given constant value every time it is invoked.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#constant
     */
    public static function constant($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a loop that runs a given number of iterations.
     * Constructs a loop that counts over a range of numbers.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#countedLoop
     */
    public static function countedLoop($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a do-while loop from an initializer, a body, and a predicate.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#doWhileLoop
     */
    public static function doWhileLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will discard some dummy arguments before calling some other specified target method handle.
     * Produces a method handle which will discard some dummy arguments before calling some other specified target method handle.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropArguments
     */
    public static function dropArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle to match the given parameter type list.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropArgumentsToMatch
     */
    public static function dropArgumentsToMatch($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle of the requested type which ignores any arguments, does nothing, and returns a suitable default depending on the return type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#empty
     */
    public static function empty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke any method handle of the given type, as if by invokeExact.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#exactInvoker
     */
    public static function exactInvoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which adapts the type of the given method handle to a new type by pairwise argument and return type conversion.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#explicitCastArguments
     */
    public static function explicitCastArguments($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing one or more of its arguments, each with its own unary filter function, and then calling the target with each pre-processed argument replaced by the result of its corresponding filter function.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#filterArguments
     */
    public static function filterArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by post-processing its return value (if any) with a filter (another method handle).
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#filterReturnValue
     */
    public static function filterReturnValue($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing some of its arguments, starting at a given position, and then calling the target with the result of the pre-processing, inserted into the original sequence of arguments just before the folded arguments.
     * Adapts a target method handle by pre-processing some of its arguments, and then calling the target with the result of the pre-processing, inserted into the original sequence of arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#foldArguments
     */
    public static function foldArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle which adapts a target method handle, by guarding it with a test, a boolean-valued method handle.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#guardWithTest
     */
    public static function guardWithTest($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which returns its sole argument when invoked.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#identity
     */
    public static function identity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Provides a target method handle with one or more bound arguments in advance of the method handle's invocation.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#insertArguments
     */
    public static function insertArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke any method handle compatible with the given type, as if by invoke.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invoker
     */
    public static function invoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a loop that ranges over the values produced by an Iterator&lt;T&gt;.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#iteratedLoop
     */
    public static function iteratedLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object with full capabilities to emulate all supported bytecode behaviors of the caller.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lookup
     */
    public static function lookup($a = null)
    {
        return new Lookup($a);
    }

    /**
     * Constructs a method handle representing a loop with several loop variables that are updated and checked upon each iteration.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#loop
     */
    public static function loop($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which adapts the calling sequence of the given method handle to a new type, by reordering the arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#permuteArguments
     */
    public static function permuteArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object with full capabilities to emulate all supported bytecode behaviors, including  private access, on a target class.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#privateLookupIn
     */
    public static function privateLookupIn($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object which is trusted minimally.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#publicLookup
     */
    public static function publicLookup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Performs an unchecked "crack" of a direct method handle.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#reflectAs
     */
    public static function reflectAs($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will invoke any method handle of the given type, with a given number of trailing arguments replaced by a single trailing Object[] array.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#spreadInvoker
     */
    public static function spreadInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will throw exceptions of the given exType.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#throwException
     */
    public static function throwException($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle that adapts a target method handle by wrapping it in a try-finally block.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#tryFinally
     */
    public static function tryFinally($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke a signature-polymorphic access mode method on any VarHandle whose associated access mode type is compatible with the given type.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varHandleExactInvoker
     */
    public static function varHandleExactInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke a signature-polymorphic access mode method on any VarHandle whose associated access mode type is compatible with the given type.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varHandleInvoker
     */
    public static function varHandleInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a while loop from an initializer, a body, and a predicate.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#whileLoop
     */
    public static function whileLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a constant method handle of the requested return type which returns the default value for that type every time it is invoked.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#zero
     */
    public static function zero($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
