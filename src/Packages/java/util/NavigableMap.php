<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `NavigableMap` interface was auto generated.
 */
interface NavigableMap
{
    /**
     * Returns a key-value mapping associated with the least key greater than or equal to the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ceilingEntry
     * @NotImplemented
     */
    // public function ceilingEntry($a = null)

    /**
     * Returns the least key greater than or equal to the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ceilingKey
     * @NotImplemented
     */
    // public function ceilingKey($a = null)

    /**
     * Returns a reverse order NavigableSet view of the keys contained in this map.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#descendingKeySet
     * @NotImplemented
     */
    // public function descendingKeySet($a = null)

    /**
     * Returns a reverse order view of the mappings contained in this map.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#descendingMap
     * @NotImplemented
     */
    // public function descendingMap($a = null)

    /**
     * Returns a key-value mapping associated with the least key in this map, or null if the map is empty.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#firstEntry
     * @NotImplemented
     */
    // public function firstEntry($a = null)

    /**
     * Returns a key-value mapping associated with the greatest key less than or equal to the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#floorEntry
     * @NotImplemented
     */
    // public function floorEntry($a = null)

    /**
     * Returns the greatest key less than or equal to the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#floorKey
     * @NotImplemented
     */
    // public function floorKey($a = null)

    /**
     * Returns a view of the portion of this map whose keys are strictly less than toKey.
     * Returns a view of the portion of this map whose keys are less than (or equal to, if inclusive is true) toKey.
     *
     * @param mixed $a
     * @param mixed $b
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#headMap
     * @NotImplemented
     */
    // public function headMap($a = null, $b = null)

    /**
     * Returns a key-value mapping associated with the least key strictly greater than the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#higherEntry
     * @NotImplemented
     */
    // public function higherEntry($a = null)

    /**
     * Returns the least key strictly greater than the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#higherKey
     * @NotImplemented
     */
    // public function higherKey($a = null)

    /**
     * Returns a key-value mapping associated with the greatest key in this map, or null if the map is empty.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lastEntry
     * @NotImplemented
     */
    // public function lastEntry($a = null)

    /**
     * Returns a key-value mapping associated with the greatest key strictly less than the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lowerEntry
     * @NotImplemented
     */
    // public function lowerEntry($a = null)

    /**
     * Returns the greatest key strictly less than the given key, or null if there is no such key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lowerKey
     * @NotImplemented
     */
    // public function lowerKey($a = null)

    /**
     * Returns a NavigableSet view of the keys contained in this map.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#navigableKeySet
     * @NotImplemented
     */
    // public function navigableKeySet($a = null)

    /**
     * Removes and returns a key-value mapping associated with the least key in this map, or null if the map is empty.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#pollFirstEntry
     * @NotImplemented
     */
    // public function pollFirstEntry($a = null)

    /**
     * Removes and returns a key-value mapping associated with the greatest key in this map, or null if the map is empty.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#pollLastEntry
     * @NotImplemented
     */
    // public function pollLastEntry($a = null)

    /**
     * Returns a view of the portion of this map whose keys range from fromKey to toKey.
     * Returns a view of the portion of this map whose keys range from fromKey, inclusive, to toKey, exclusive.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#subMap
     * @NotImplemented
     */
    // public function subMap($a = null, $b = null, $c = null, $d = null)

    /**
     * Returns a view of the portion of this map whose keys are greater than or equal to fromKey.
     * Returns a view of the portion of this map whose keys are greater than (or equal to, if inclusive is true) fromKey.
     *
     * @param mixed $a
     * @param mixed $b
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#tailMap
     * @NotImplemented
     */
    // public function tailMap($a = null, $b = null)
}
