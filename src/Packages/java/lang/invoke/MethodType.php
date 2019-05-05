<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\util\_List;

/**
 * The `MethodType` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class MethodType extends _Object /* implements Serializable, _List */
{
    private $parameters = [];

    public function __construct(...$parameters)
    {
        parent::__construct(...$parameters);
        $this->parameters = $parameters;
    }

    /**
     * Finds or creates a method type with additional parameter types.
     * Finds or creates a method type with additional parameter types.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#appendParameterTypes
     */
    public function appendParameterTypes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with a single different parameter type.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#changeParameterType
     */
    public function changeParameterType($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with a different return type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#changeReturnType
     */
    public function changeReturnType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with some parameter types omitted.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropParameterTypes
     */
    public function dropParameterTypes($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the specified object with this type for equality.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Erases all reference types to Object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#erase
     */
    public function erase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates an instance of a method type, given the spelling of its bytecode descriptor.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#fromMethodDescriptorString
     */
    public static function fromMethodDescriptorString($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all types, both reference and primitive, to Object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#generic
     */
    public function generic($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type whose components are all Object.
     * Finds or creates a method type whose components are Object with an optional trailing Object[] array.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#genericMethodType
     */
    public static function genericMethodType($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code value for this method type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reports if this type contains a primitive argument or return value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasPrimitives
     */
    public function hasPrimitives($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reports if this type contains a wrapper argument or return value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasWrappers
     */
    public function hasWrappers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds or creates a method type with additional parameter types.
     * Finds or creates a method type with additional parameter types.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#insertParameterTypes
     */
    public function insertParameterTypes($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the last parameter type of this method type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lastParameterType
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#methodType
     */
    public static function methodType($a = null, $b = null, $c = null)
    {
        return new static($a);
    }

    /**
     * Presents the parameter types as an array (a convenience method).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterArray
     */
    public function parameterArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of parameter types in this method type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterCount
     */
    public function parameterCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Presents the parameter types as a list (a convenience method).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterList
     */
    public function parameterList($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the parameter type at the specified index, within this method type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#parameterType
     */
    public function parameterType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the return type of this method type.
     *
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#returnType
     */
    public function returnType()
    {
        return $this->parameters[0];
    }

    /**
     * Produces a bytecode descriptor representation of the method type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toMethodDescriptorString
     */
    public function toMethodDescriptorString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the method type, of the form "(PT0,PT1...)RT".
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
     * Converts all wrapper types to their corresponding primitive types.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unwrap
     */
    public function unwrap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all primitive types to their corresponding wrapper types.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#wrap
     */
    public function wrap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
