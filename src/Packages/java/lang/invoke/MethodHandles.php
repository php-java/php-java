<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;

// use PHPJava\Packages\java\util\_List;
// use PHPJava\Packages\java\lang\reflect\Member;

/**
 * The `MethodHandles` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class MethodHandles extends Object_ // implements _List, Member
{
    /**
     * Produces a method handle constructing arrays of a desired type, as if by the anewarray bytecode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayConstructor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function arrayConstructor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving read access to elements of an array, as if by the aaload bytecode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementGetter
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function arrayElementGetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving write access to elements of an array, as if by the astore bytecode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementSetter
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function arrayElementSetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of an array of type arrayClass.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayElementVarHandle
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function arrayElementVarHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle returning the length of an array, as if by the arraylength bytecode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#arrayLength
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function arrayLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of a byte[] array viewed as if it were a different primitive array type, such as int[] or long[].
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#byteArrayViewVarHandle
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function byteArrayViewVarHandle($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to elements of a ByteBuffer viewed as if it were an array of elements of a different primitive component type to that of byte, such as int[] or long[].
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#byteBufferViewVarHandle
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function byteBufferViewVarHandle($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle which adapts a target method handle, by running it inside an exception handler.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#catchException
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function catchException($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing a sub-sequence of its arguments with a filter (another method handle).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#collectArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function collectArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle of the requested return type which returns the given constant value every time it is invoked.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#constant
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function constant($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a loop that runs a given number of iterations.
     * Constructs a loop that counts over a range of numbers.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#countedLoop
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public static function countedLoop($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a do-while loop from an initializer, a body, and a predicate.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#doWhileLoop
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function doWhileLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will discard some dummy arguments before calling some other specified target method handle.
     * Produces a method handle which will discard some dummy arguments before calling some other specified target method handle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function dropArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle to match the given parameter type list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropArgumentsToMatch
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public static function dropArgumentsToMatch($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle of the requested type which ignores any arguments, does nothing, and returns a suitable default depending on the return type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#empty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function empty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke any method handle of the given type, as if by invokeExact.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#exactInvoker
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function exactInvoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which adapts the type of the given method handle to a new type by pairwise argument and return type conversion.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#explicitCastArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function explicitCastArguments($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing one or more of its arguments, each with its own unary filter function, and then calling the target with each pre-processed argument replaced by the result of its corresponding filter function.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#filterArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function filterArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by post-processing its return value (if any) with a filter (another method handle).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#filterReturnValue
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function filterReturnValue($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adapts a target method handle by pre-processing some of its arguments, starting at a given position, and then calling the target with the result of the pre-processing, inserted into the original sequence of arguments just before the folded arguments.
     * Adapts a target method handle by pre-processing some of its arguments, and then calling the target with the result of the pre-processing, inserted into the original sequence of arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#foldArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function foldArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle which adapts a target method handle, by guarding it with a test, a boolean-valued method handle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#guardWithTest
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function guardWithTest($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which returns its sole argument when invoked.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#identity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function identity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Provides a target method handle with one or more bound arguments in advance of the method handle's invocation.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#insertArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function insertArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke any method handle compatible with the given type, as if by invoke.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#invoker
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function invoker($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a loop that ranges over the values produced by an Iterator&lt;T&gt;.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#iteratedLoop
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function iteratedLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object with full capabilities to emulate all supported bytecode behaviors of the caller.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lookup
     * @param null|mixed $a
     */
    public static function lookup($a = null)
    {
        return JavaClass::load(
            'java.lang.invoke.MethodHandles.Lookup',
            [
                'inherit' => true,
            ]
        )->getInvoker()
            ->construct($a)
            ->getJavaClass();
    }

    /**
     * Constructs a method handle representing a loop with several loop variables that are updated and checked upon each iteration.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#loop
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function loop($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which adapts the calling sequence of the given method handle to a new type, by reordering the arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#permuteArguments
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function permuteArguments($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object with full capabilities to emulate all supported bytecode behaviors, including  private access, on a target class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#privateLookupIn
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function privateLookupIn($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a lookup object which is trusted minimally.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#publicLookup
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function publicLookup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Performs an unchecked "crack" of a direct method handle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#reflectAs
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function reflectAs($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will invoke any method handle of the given type, with a given number of trailing arguments replaced by a single trailing Object[] array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#spreadInvoker
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function spreadInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which will throw exceptions of the given exType.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#throwException
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function throwException($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a method handle that adapts a target method handle by wrapping it in a try-finally block.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#tryFinally
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function tryFinally($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke a signature-polymorphic access mode method on any VarHandle whose associated access mode type is compatible with the given type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varHandleExactInvoker
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function varHandleExactInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a special invoker method handle which can be used to invoke a signature-polymorphic access mode method on any VarHandle whose associated access mode type is compatible with the given type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varHandleInvoker
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function varHandleInvoker($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a while loop from an initializer, a body, and a predicate.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#whileLoop
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function whileLoop($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a constant method handle of the requested return type which returns the default value for that type every time it is invoked.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#zero
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function zero($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
