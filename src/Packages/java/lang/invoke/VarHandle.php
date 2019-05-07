<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `VarHandle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class VarHandle extends _Object /* implements _List */
{

    /**
     * Obtains the access mode type for this VarHandle and a given access mode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#accessModeType
     */
    public function accessModeType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads before the fence will not be reordered with loads and stores after the fence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#acquireFence
     */
    public static function acquireFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchange
     */
    public function compareAndExchange($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchangeAcquire
     */
    public function compareAndExchangeAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setRelease(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndExchangeRelease
     */
    public function compareAndExchangeRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#compareAndSet
     */
    public function compareAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the coordinate types for this VarHandle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#coordinateTypes
     */
    public function coordinateTypes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads and stores before the fence will not be reordered with loads and stores after the fence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#fullFence
     */
    public static function fullFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, with memory semantics of reading as if the variable was declared non-volatile.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#get
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, and ensures that subsequent loads and stores are not reordered before this access.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAcquire
     */
    public function getAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of setVolatile(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAdd
     */
    public function getAndAdd($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of set(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAddAcquire
     */
    public function getAndAddAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically adds the value to the current value of a variable with the memory semantics of setRelease(java.lang.Object...), and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndAddRelease
     */
    public function getAndAddRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAnd
     */
    public function getAndBitwiseAnd($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAndAcquire
     */
    public function getAndBitwiseAndAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise AND between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseAndRelease
     */
    public function getAndBitwiseAndRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOr
     */
    public function getAndBitwiseOr($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOrAcquire
     */
    public function getAndBitwiseOrAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise OR between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseOrRelease
     */
    public function getAndBitwiseOrRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXor
     */
    public function getAndBitwiseXor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXorAcquire
     */
    public function getAndBitwiseXorAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the result of bitwise XOR between the variable's current value and the mask with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndBitwiseXorRelease
     */
    public function getAndBitwiseXorRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSet
     */
    public function getAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of set(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSetAcquire
     */
    public function getAndSetAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically sets the value of a variable to the newValue with the memory semantics of setRelease(java.lang.Object...) and returns the variable's previous value, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getAndSetRelease
     */
    public function getAndSetRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, accessed in program order, but with no assurance of memory ordering effects with respect to other threads.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getOpaque
     */
    public function getOpaque($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a variable, with memory semantics of reading as if the variable was declared volatile.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#getVolatile
     */
    public function getVolatile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the given access mode is supported, otherwise false.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#isAccessModeSupported
     */
    public function isAccessModeSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads before the fence will not be reordered with loads after the fence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#loadLoadFence
     */
    public static function loadLoadFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that loads and stores before the fence will not be reordered with stores after the fence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#releaseFence
     */
    public static function releaseFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, with memory semantics of setting as if the variable was declared non-volatile and non-final.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#set
     */
    public function set($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, in program order, but with no assurance of memory ordering effects with respect to other threads.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setOpaque
     */
    public function setOpaque($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, and ensures that prior loads and stores are not reordered after this access.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setRelease
     */
    public function setRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a variable to the newValue, with memory semantics of setting as if the variable was declared volatile.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#setVolatile
     */
    public function setVolatile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that stores before the fence will not be reordered with stores after the fence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#storeStoreFence
     */
    public static function storeStoreFence($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Obtains a method handle bound to this VarHandle and the given access mode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toMethodHandle
     */
    public function toMethodHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the variable type of variables referenced by this VarHandle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#varType
     */
    public function varType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the memory semantics of setVolatile(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getVolatile(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSet
     */
    public function weakCompareAndSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of getAcquire(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetAcquire
     */
    public function weakCompareAndSetAcquire($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of set(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetPlain
     */
    public function weakCompareAndSetPlain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Possibly atomically sets the value of a variable to the newValue with the semantics of setRelease(java.lang.Object...) if the variable's current value, referred to as the witness value, == the expectedValue, as accessed with the memory semantics of get(java.lang.Object...).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#weakCompareAndSetRelease
     */
    public function weakCompareAndSetRelease($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
