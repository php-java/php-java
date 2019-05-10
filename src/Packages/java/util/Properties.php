<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;
// use PHPJava\Packages\java\util\Set;

/**
 * The `Properties` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\Dictionary
 * @parent \PHPJava\Packages\java\util\Hashtable
 */
class Properties extends Hashtable // implements Serializable, Cloneable, Set
{
    /**
     * A property list that contains default values for any keys not found in this property list.
     *
     * @var mixed $defaults
     */
    protected $defaults;

    /**
     * Searches for the property with the specified key in this property list.
     * Searches for the property with the specified key in this property list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Prints this property list out to the specified output stream.
     * Prints this property list out to the specified output stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#list
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function list($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a property list (key and element pairs) from the input byte stream.
     * Reads a property list (key and element pairs) from the input character stream in a simple line-oriented format.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#load
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function load($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads all of the properties represented by the XML document on the specified input stream into this properties table.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#loadFromXML
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function loadFromXML($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of all the keys in this property list, including distinct keys in the default property list if a key of the same name has not already been found from the main properties list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#propertyNames
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function propertyNames($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method does not throw an IOException if an I/O error occurs while saving the property list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#save
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function save($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Calls the Hashtable method put.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes this property list (key and element pairs) in this Properties table to the output stream in a format suitable for loading into a Properties table using the load(InputStream) method.
     * Writes this property list (key and element pairs) in this Properties table to the output character stream in a format suitable for using the load(Reader) method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#store
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function store($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Emits an XML document representing all of the properties contained in this table.
     * Emits an XML document representing all of the properties contained in this table, using the specified encoding.
     * Emits an XML document representing all of the properties contained in this table, using the specified encoding.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#storeToXML
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function storeToXML($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable set of keys from this property list where the key and its corresponding value are strings, including distinct keys in the default property list if a key of the same name has not already been found from the main properties list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#stringPropertyNames
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function stringPropertyNames($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
