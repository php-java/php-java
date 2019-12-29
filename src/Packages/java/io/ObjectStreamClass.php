<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `ObjectStreamClass` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class ObjectStreamClass extends Object_ // implements Serializable
{
    /**
     * serialPersistentFields value indicating no serializable fields.
     *
     * @var mixed $NO_FIELDS
     */
    public static $NO_FIELDS = null;

    /**
     * Return the class in the local VM that this version is mapped to.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#forClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function forClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get the field of this class by name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getField
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getField($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return an array of the fields of this serializable class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getFields
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of the class described by this descriptor.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the serialVersionUID for this class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getSerialVersionUID
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSerialVersionUID($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Find the descriptor for a class that can be serialized.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lookup
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_lookup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the descriptor for any class, regardless of whether it implements Serializable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lookupAny
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_lookupAny($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return a string describing this ObjectStreamClass.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
