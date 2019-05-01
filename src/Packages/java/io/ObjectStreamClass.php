<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `ObjectStreamClass` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ObjectStreamClass extends _Object /* implements Serializable */
{
    /**
     * serialPersistentFields value indicating no serializable fields
     *
     * @var mixed $NO_FIELDS
     */
    public static $NO_FIELDS = null;


    /**
     * Return the class in the local VM that this version is mapped to.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#forClass
     */
    public function forClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get the field of this class by name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getField
     */
    public function getField($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return an array of the fields of this serializable class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getFields
     */
    public function getFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of the class described by this descriptor.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getName
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the serialVersionUID for this class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getSerialVersionUID
     */
    public function getSerialVersionUID($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Find the descriptor for a class that can be serialized.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lookup
     */
    public static function static_lookup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the descriptor for any class, regardless of whether it implements Serializable.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lookupAny
     */
    public static function static_lookupAny($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return a string describing this ObjectStreamClass.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
