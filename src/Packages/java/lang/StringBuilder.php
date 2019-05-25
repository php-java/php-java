<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\CharSequence;
// use PHPJava\Packages\java\util\stream\IntStream;

/**
 * The `StringBuilder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StringBuilder extends _Object // implements Serializable, CharSequence, IntStream
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#append
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     * @nekology nekology
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
        return $this->javaClass;
    }

    /**
     * Appends the string representation of the codePoint argument to this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#appendCodePoint
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function appendCodePoint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current capacity.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#capacity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function capacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the char value in this sequence at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#charAt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function charAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of int zero-extending the char values from this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#chars
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function chars($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the character (Unicode code point) at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointAt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function codePointAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the character (Unicode code point) before the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointBefore
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function codePointBefore($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of Unicode code points in the specified text range of this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointCount
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function codePointCount($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of code point values from this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePoints
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function codePoints($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two StringBuilder instances lexicographically.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the characters in a substring of this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#delete
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function delete($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the char at the specified position in this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#deleteCharAt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function deleteCharAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Ensures that the capacity is at least equal to the specified minimum.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#ensureCapacity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ensureCapacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Characters are copied from this sequence into the destination character array dst.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getChars
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public function getChars($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this string of the first occurrence of the specified substring.
     * Returns the index within this string of the first occurrence of the specified substring, starting at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#indexOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#insert
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public function insert($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this string of the last occurrence of the specified substring.
     * Returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lastIndexOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function lastIndexOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the length (character count).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#length
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function length($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this sequence that is offset from the given index by codePointOffset code points.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#offsetByCodePoints
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function offsetByCodePoints($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Replaces the characters in a substring of this sequence with characters in the specified String.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#replace
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function replace($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes this character sequence to be replaced by the reverse of the sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#reverse
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function reverse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The character at the specified index is set to ch.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setCharAt
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setCharAt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the length of the character sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setLength
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new character sequence that is a subsequence of this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#subSequence
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function subSequence($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new String that contains a subsequence of characters currently contained in this character sequence.
     * Returns a new String that contains a subsequence of characters currently contained in this sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#substring
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function substring($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Attempts to reduce storage used for the character sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#trimToSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function trimToSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    public function toString()
    {
        return JavaClass::load('java.lang.String', $this->javaClass->getOptions())
            ->getInvoker()
            ->construct((string) $this)
            ->getJavaClass();
    }

    public function __toString(): string
    {
        return $this->sequence;
    }
}
