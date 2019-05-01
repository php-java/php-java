<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\_String;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\CharSequence;
// use PHPJava\Packages\java\util\stream\IntStream;

/**
 * The `StringBuilder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StringBuilder extends _Object /* implements Serializable, CharSequence, IntStream */
{

    private $sequence = '';

    /**
     * Appends the string representation of the boolean argument to the sequence.
     * Appends the string representation of the char argument to this sequence.
     * Appends the string representation of the char array argument to this sequence.
     * Appends the string representation of a subarray of the char array argument to this sequence.
     * Appends the string representation of the double argument to this sequence.
     * Appends the string representation of the float argument to this sequence.
     * Appends the string representation of the int argument to this sequence.
     * Appends the string representation of the long argument to this sequence.
     * Appends the specified character sequence to this Appendable.
     * Appends a subsequence of the specified CharSequence to this sequence.
     * Appends the string representation of the Object argument.
     * Appends the specified string to this character sequence.
     * Appends the specified StringBuffer to this sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#append
     */
    public function append($a = null, $b = null, $c = null)
    {
        if ($a instanceof _String) {
            $this->sequence .= $a->toString();
        } else {
            if (is_array($a)) {
                $a = implode($a);
            }
            $this->sequence .= $a;
        }
        return $this;
    }

    /**
     * Appends the string representation of the codePoint argument to this sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#appendCodePoint
     */
    public function appendCodePoint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current capacity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#capacity
     */
    public function capacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the char value in this sequence at the specified index.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#charAt
     */
    public function charAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of int zero-extending the char values from this sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#chars
     */
    public function chars($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the character (Unicode code point) at the specified index.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointAt
     */
    public function codePointAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the character (Unicode code point) before the specified index.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointBefore
     */
    public function codePointBefore($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of Unicode code points in the specified text range of this sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointCount
     */
    public function codePointCount($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of code point values from this sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePoints
     */
    public function codePoints($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two StringBuilder instances lexicographically.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareTo
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the characters in a substring of this sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#delete
     */
    public function delete($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the char at the specified position in this sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#deleteCharAt
     */
    public function deleteCharAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that the capacity is at least equal to the specified minimum.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#ensureCapacity
     */
    public function ensureCapacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Characters are copied from this sequence into the destination character array dst.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getChars
     */
    public function getChars($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this string of the first occurrence of the specified substring.
     * Returns the index within this string of the first occurrence of the specified substring, starting at the specified index.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#indexOf
     */
    public function indexOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Inserts the string representation of the boolean argument into this sequence.
     * Inserts the string representation of the char argument into this sequence.
     * Inserts the string representation of the char array argument into this sequence.
     * Inserts the string representation of a subarray of the str array argument into this sequence.
     * Inserts the string representation of the double argument into this sequence.
     * Inserts the string representation of the float argument into this sequence.
     * Inserts the string representation of the second int argument into this sequence.
     * Inserts the string representation of the long argument into this sequence.
     * Inserts the specified CharSequence into this sequence.
     * Inserts a subsequence of the specified CharSequence into this sequence.
     * Inserts the string representation of the Object argument into this character sequence.
     * Inserts the string into this character sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#insert
     */
    public function insert($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this string of the last occurrence of the specified substring.
     * Returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lastIndexOf
     */
    public function lastIndexOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the length (character count).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#length
     */
    public function length($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this sequence that is offset from the given index by codePointOffset code points.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#offsetByCodePoints
     */
    public function offsetByCodePoints($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Replaces the characters in a substring of this sequence with characters in the specified String.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#replace
     */
    public function replace($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes this character sequence to be replaced by the reverse of the sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#reverse
     */
    public function reverse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The character at the specified index is set to ch.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setCharAt
     */
    public function setCharAt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the length of the character sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setLength
     */
    public function setLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new character sequence that is a subsequence of this sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#subSequence
     */
    public function subSequence($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new String that contains a subsequence of characters currently contained in this character sequence.
     * Returns a new String that contains a subsequence of characters currently contained in this sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#substring
     */
    public function substring($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Attempts to reduce storage used for the character sequence.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#trimToSize
     */
    public function trimToSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }


    public function toString(): string
    {
        return (string) $this;
    }

    public function __toString(): string
    {
        return $this->sequence;
    }
}
