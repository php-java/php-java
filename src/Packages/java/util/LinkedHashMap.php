<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;
// use PHPJava\Packages\java\util\Map;

/**
 * The `LinkedHashMap` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\AbstractMap
 * @parent \PHPJava\Packages\java\util\HashMap
 */
class LinkedHashMap extends HashMap // implements Serializable, Cloneable, Map
{
    /**
     * Returns true if this map maps one or more keys to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#containsValue
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function containsValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set view of the mappings contained in this map.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#entrySet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function entrySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value to which the specified key is mapped, or null if this map contains no mapping for the key.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#get
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set view of the keys contained in this map.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#keySet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function keySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this map should remove its eldest entry.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeEldestEntry
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    protected function removeEldestEntry($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Collection view of the values contained in this map.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#values
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
