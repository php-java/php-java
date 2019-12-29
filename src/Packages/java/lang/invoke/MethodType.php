<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\util\_List;

/**
 * The `MethodType` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class MethodType extends _Object // implements Serializable, _List
{
    protected $parameters = [];

    public function __construct(...$parameters)
    {
        parent::__construct(...$parameters);
        $this->parameters = $parameters;
    }

    /**
     * Finds or creates a method type with additional parameter types.
     * Finds or creates a method type with additional parameter types.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#appendParameterTypes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function appendParameterTypes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with a single different parameter type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#changeParameterType
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function changeParameterType($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with a different return type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#changeReturnType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function changeReturnType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with some parameter types omitted.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropParameterTypes
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function dropParameterTypes($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the specified object with this type for equality.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Erases all reference types to Object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#erase
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function erase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates an instance of a method type, given the spelling of its bytecode descriptor.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#fromMethodDescriptorString
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function fromMethodDescriptorString($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all types, both reference and primitive, to Object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#generic
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function generic($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type whose components are all Object.
     * Finds or creates a method type whose components are Object with an optional trailing Object[] array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#genericMethodType
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function genericMethodType($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code value for this method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reports if this type contains a primitive argument or return value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasPrimitives
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasPrimitives($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reports if this type contains a wrapper argument or return value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasWrappers
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasWrappers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with additional parameter types.
     * Finds or creates a method type with additional parameter types.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#insertParameterTypes
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function insertParameterTypes($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the last parameter type of this method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lastParameterType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lastParameterType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with the given components.
     * Finds or creates a method type with the given components.
     * Finds or creates an instance of the given method type.
     * Finds or creates a method type with the given components.
     * Finds or creates a method type with the given components.
     * Finds or creates a method type with the given components.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#methodType
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     */
    public static function methodType($a = null, $b = null, $c = null)
    {
        return JavaClass::load(
            'java.lang.invoke.MethodType',
            [
                'inherit' => true,
            ]
        )->getInvoker()
            ->construct(...func_get_args())
            ->getJavaClass();
    }

    /**
     * Presents the parameter types as an array (a convenience method).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterArray
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function parameterArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of parameter types in this method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterCount
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function parameterCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Presents the parameter types as a list (a convenience method).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterList
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function parameterList($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the parameter type at the specified index, within this method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function parameterType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the return type of this method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#returnType
     */
    public function returnType()
    {
        return $this->parameters[0];
    }

    /**
     * Produces a bytecode descriptor representation of the method type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toMethodDescriptorString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toMethodDescriptorString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the method type, of the form "(PT0,PT1...)RT".
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all wrapper types to their corresponding primitive types.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unwrap
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function unwrap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all primitive types to their corresponding wrapper types.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrap
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function wrap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
