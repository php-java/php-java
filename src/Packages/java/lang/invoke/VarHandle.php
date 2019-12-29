<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `VarHandle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class VarHandle extends _Object // implements _List
{
    /**
     * Obtains the access mode type for this VarHandle and a given access mode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#accessModeType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function accessModeType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads before the fence will not be reordered with loads and stores after the fence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#acquireFence
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function acquireFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchange
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareAndExchange($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchangeAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareAndExchangeAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setRelease(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchangeRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareAndExchangeRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndSet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the coordinate types for this VarHandle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#coordinateTypes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function coordinateTypes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads and stores before the fence will not be reordered with loads and stores after the fence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#fullFence
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function fullFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, with memory semantics of reading as if the variable was declared non-volatile.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#get
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, and ensures that subsequent loads and stores are not reordered before this access.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of setVolatile(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAdd
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndAdd($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of set(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAddAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndAddAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of setRelease(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAddRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndAddRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAnd
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseAnd($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAndAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseAndAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAndRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseAndRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOr
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseOr($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOrAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseOrAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOrRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseOrRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseXor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXorAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseXorAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXorRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndBitwiseXorRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSetAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndSetAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSetRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAndSetRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, accessed in program order, but with no assurance of memory ordering effects with respect to other threads.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getOpaque
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getOpaque($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, with memory semantics of reading as if the variable was declared volatile.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getVolatile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getVolatile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the given access mode is supported, otherwise false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#isAccessModeSupported
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAccessModeSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads before the fence will not be reordered with loads after the fence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#loadLoadFence
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function loadLoadFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads and stores before the fence will not be reordered with stores after the fence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#releaseFence
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function releaseFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, with memory semantics of setting as if the variable was declared non-volatile and non-final.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#set
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function set($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, in program order, but with no assurance of memory ordering effects with respect to other threads.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setOpaque
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setOpaque($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, and ensures that prior loads and stores are not reordered after this access.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, with memory semantics of setting as if the variable was declared volatile.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setVolatile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setVolatile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that stores before the fence will not be reordered with stores after the fence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#storeStoreFence
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function storeStoreFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Obtains a method handle bound to this VarHandle and the given access mode.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toMethodHandle
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toMethodHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the variable type of variables referenced by this VarHandle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function varType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function weakCompareAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetAcquire
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function weakCompareAndSetAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetPlain
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function weakCompareAndSetPlain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of setRelease(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetRelease
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function weakCompareAndSetRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
