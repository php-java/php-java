<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke\VarHandle;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `AccessMode` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class AccessMode extends Enum // implements Serializable, Comparable
{
    // The access mode whose access is specified by the corresponding method VarHandle.compareAndExchange
    const COMPARE_AND_EXCHANGE = 'COMPARE_AND_EXCHANGE';

    // The access mode whose access is specified by the corresponding method VarHandle.compareAndExchangeAcquire
    const COMPARE_AND_EXCHANGE_ACQUIRE = 'COMPARE_AND_EXCHANGE_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.compareAndExchangeRelease
    const COMPARE_AND_EXCHANGE_RELEASE = 'COMPARE_AND_EXCHANGE_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.compareAndSet
    const COMPARE_AND_SET = 'COMPARE_AND_SET';

    // The access mode whose access is specified by the corresponding method VarHandle.get
    const GET = 'GET';

    // The access mode whose access is specified by the corresponding method VarHandle.getAcquire
    const GET_ACQUIRE = 'GET_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndAdd
    const GET_AND_ADD = 'GET_AND_ADD';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndAddAcquire
    const GET_AND_ADD_ACQUIRE = 'GET_AND_ADD_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndAddRelease
    const GET_AND_ADD_RELEASE = 'GET_AND_ADD_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseAnd
    const GET_AND_BITWISE_AND = 'GET_AND_BITWISE_AND';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseAndAcquire
    const GET_AND_BITWISE_AND_ACQUIRE = 'GET_AND_BITWISE_AND_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseAndRelease
    const GET_AND_BITWISE_AND_RELEASE = 'GET_AND_BITWISE_AND_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseOr
    const GET_AND_BITWISE_OR = 'GET_AND_BITWISE_OR';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseOrAcquire
    const GET_AND_BITWISE_OR_ACQUIRE = 'GET_AND_BITWISE_OR_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseOrRelease
    const GET_AND_BITWISE_OR_RELEASE = 'GET_AND_BITWISE_OR_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseXor
    const GET_AND_BITWISE_XOR = 'GET_AND_BITWISE_XOR';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseXorAcquire
    const GET_AND_BITWISE_XOR_ACQUIRE = 'GET_AND_BITWISE_XOR_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndBitwiseXorRelease
    const GET_AND_BITWISE_XOR_RELEASE = 'GET_AND_BITWISE_XOR_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndSet
    const GET_AND_SET = 'GET_AND_SET';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndSetAcquire
    const GET_AND_SET_ACQUIRE = 'GET_AND_SET_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.getAndSetRelease
    const GET_AND_SET_RELEASE = 'GET_AND_SET_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.getOpaque
    const GET_OPAQUE = 'GET_OPAQUE';

    // The access mode whose access is specified by the corresponding method VarHandle.getVolatile
    const GET_VOLATILE = 'GET_VOLATILE';

    // The access mode whose access is specified by the corresponding method VarHandle.set
    const SET = 'SET';

    // The access mode whose access is specified by the corresponding method VarHandle.setOpaque
    const SET_OPAQUE = 'SET_OPAQUE';

    // The access mode whose access is specified by the corresponding method VarHandle.setRelease
    const SET_RELEASE = 'SET_RELEASE';

    // The access mode whose access is specified by the corresponding method VarHandle.setVolatile
    const SET_VOLATILE = 'SET_VOLATILE';

    // The access mode whose access is specified by the corresponding method VarHandle.weakCompareAndSet
    const WEAK_COMPARE_AND_SET = 'WEAK_COMPARE_AND_SET';

    // The access mode whose access is specified by the corresponding method VarHandle.weakCompareAndSetAcquire
    const WEAK_COMPARE_AND_SET_ACQUIRE = 'WEAK_COMPARE_AND_SET_ACQUIRE';

    // The access mode whose access is specified by the corresponding method VarHandle.weakCompareAndSetPlain
    const WEAK_COMPARE_AND_SET_PLAIN = 'WEAK_COMPARE_AND_SET_PLAIN';

    // The access mode whose access is specified by the corresponding method VarHandle.weakCompareAndSetRelease
    const WEAK_COMPARE_AND_SET_RELEASE = 'WEAK_COMPARE_AND_SET_RELEASE';

    /**
     * Returns the VarHandle signature-polymorphic method name associated with this AccessMode value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#methodName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function methodName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the AccessMode value associated with the specified VarHandle signature-polymorphic method name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#valueFromMethodName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function valueFromMethodName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#valueOf
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#values
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
