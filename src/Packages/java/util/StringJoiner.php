<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\CharSequence;

/**
 * The `StringJoiner` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StringJoiner extends _Object /* implements CharSequence */
{

    /**
     * Adds a copy of the given CharSequence value as the next element of the StringJoiner value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#add
     */
    public function add($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the length of the String representation of this StringJoiner.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#length
     */
    public function length($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adds the contents of the given StringJoiner without prefix and suffix as the next element if it is non-empty.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#merge
     */
    public function merge($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the sequence of characters to be used when determining the string representation of this StringJoiner and no elements have been added yet, that is, when it is empty.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setEmptyValue
     */
    public function setEmptyValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current value, consisting of the prefix, the values added so far separated by the delimiter, and the suffix, unless no elements have been added in which case, the prefix + suffix or the emptyValue characters are returned.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
