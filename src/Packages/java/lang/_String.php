<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Utilities\Extractor;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\util\Comparator;
// use PHPJava\Packages\java\util\stream\IntStream;

/**
 * The `String` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class _String extends _Object implements CharSequence
{
    private $hash = 0;
    private $object;

    /**
     * A Comparator that orders String objects as by compareToIgnoreCase.
     *
     * @var mixed $CASE_INSENSITIVE_ORDER
     */
    public static $CASE_INSENSITIVE_ORDER = null;

    /**
     * _String constructor.
     * @param null $object
     */
    public function __construct($object = null)
    {
        parent::__construct();
        $this->object = $object;
    }

    /**
     * Returns the char value at the specified index.
     *
     * @throws IndexOutOfBoundsException
     * @return _Char
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/String.html#charAt(int)
     */
    public function charAt($a)
    {
        $index = Extractor::realValue($a);
        $length = $this->length();

        if ($index < 0 || $length <= $index) {
            throw new IndexOutOfBoundsException("String index out of range: {$index}");
        }

        return new _Char($this->toString()[$index]);
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
     * Returns the number of Unicode code points in the specified text range of this String.
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
     * Compares two strings lexicographically.
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
     * Compares two strings lexicographically, ignoring case differences.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareToIgnoreCase
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareToIgnoreCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Concatenates the specified string to the end of this string.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/String.html#concat(java.lang.String)
     * @param null|mixed $a
     */
    public function concat($a = null)
    {
        return new static($this . $a);
    }

    /**
     * Returns true if and only if this string contains the specified sequence of char values.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#contains
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function contains($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares this string to the specified CharSequence.
     * Compares this string to the specified StringBuffer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#contentEquals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function contentEquals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Equivalent to valueOf(char[]).
     * Equivalent to valueOf(char[], int, int).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#copyValueOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_copyValueOf($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this string ends with the specified suffix.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#endsWith
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function endsWith($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares this string to the specified object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/String.html#equals(java.lang.Object)
     * @param null|mixed $a
     */
    public function equals($a = null)
    {
        if (!($this->object instanceof _Utf8)) {
            return false;
        }
        if ($a instanceof _String) {
            return $this->toString() === $a->toString();
        }
        return $this->toString() === $a;
    }

    /**
     * Compares this String to another String, ignoring case considerations.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#equalsIgnoreCase
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equalsIgnoreCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a formatted string using the specified format string and arguments.
     * Returns a formatted string using the specified locale, format string, and arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#format
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_format($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Encodes this String into a sequence of bytes using the platform's default charset, storing the result into a new byte array.
     * Deprecated.This method does not properly convert characters into bytes.
     * Encodes this String into a sequence of bytes using the named charset, storing the result into a new byte array.
     * Encodes this String into a sequence of bytes using the given charset, storing the result into a new byte array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getBytes
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public function getBytes($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Copies characters from this string into the destination character array.
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
     * Returns a hash code for this string.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/String.html#hashCode()
     */
    public function hashCode()
    {
        $count = $this->length();

        $h = $this->hash;
        if ($h || !$count) {
            return $h;
        }

        $str = $this->toString();
        for ($i = 0; $i < $count; $i++) {
            $h = 31 * $h + ord($str[$i]);
        }

        return $this->hash = $h;
    }

    /**
     * Returns the index within this string of the first occurrence of the specified character.
     * Returns the index within this string of the first occurrence of the specified character, starting the search at the specified index.
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
     * Returns a canonical representation for the string object.
     *
     * @native ConstantPool
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#intern
     * @throws NotImplementedException
     */
    public function intern(ConstantPool $cp)
    {
        // Find the string from the Constant Pool.
        foreach ($cp as $key => $value) {
            if (!($value instanceof _Utf8)) {
                continue;
            }
            /**
             * @var _Utf8 $value
             */
            if ((string) $value === (string) $this->object) {
                $this->object = $value
                    ->enableWrite(true)
                    ->setStringObject($this);
                break;
            }
        }
        return $this;
    }

    /**
     * Returns true if the string is empty or contains only white space codepoints, otherwise false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isBlank
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isBlank($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if, and only if, length() is 0.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isEmpty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isEmpty($a = null)
    {
        return $this->length() === 0;
    }

    /**
     * Returns a new String composed of copies of the CharSequence elements joined together with a copy of the specified delimiter.
     * Returns a new String composed of copies of the CharSequence elements joined together with a copy of the specified delimiter.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#join
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_join($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this string of the last occurrence of the specified character.
     * Returns the index within this string of the last occurrence of the specified character, searching backward starting at the specified index.
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
     * Returns the length of this string.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#length
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function length($a = null)
    {
        return strlen($this->toString());
    }

    /**
     * Returns a stream of lines extracted from this string, separated by line terminators.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lines
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lines($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether or not this string matches the given regular expression.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#matches
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function matches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within this String that is offset from the given index by codePointOffset code points.
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
     * Tests if two string regions are equal.
     * Tests if two string regions are equal.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#regionMatches
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public function regionMatches($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string whose value is the concatenation of this string repeated count times.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#repeat
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function repeat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string resulting from replacing all occurrences of oldChar in this string with newChar.
     * Replaces each substring of this string that matches the literal target sequence with the specified literal replacement sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/String.html#replace(java.lang.CharSequence,java.lang.CharSequence)
     * @param null|mixed $a
     * @param null|mixed $b
     */
    public function replace($a = null, $b = null)
    {
        return new static(str_replace($a, $b, $this));
    }

    /**
     * Replaces each substring of this string that matches the given regular expression with the given replacement.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#replaceAll
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function replaceAll($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Replaces the first substring of this string that matches the given regular expression with the given replacement.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#replaceFirst
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function replaceFirst($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Splits this string around matches of the given regular expression.
     * Splits this string around matches of the given regular expression.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#split
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function split($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this string starts with the specified prefix.
     * Tests if the substring of this string beginning at the specified index starts with the specified prefix.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#startsWith
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function startsWith($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string whose value is this string, with all leading and trailing white space removed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#strip
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function strip($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string whose value is this string, with all leading white space removed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#stripLeading
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function stripLeading($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string whose value is this string, with all trailing white space removed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#stripTrailing
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function stripTrailing($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a character sequence that is a subsequence of this sequence.
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
     * Returns a string that is a substring of this string.
     * Returns a string that is a substring of this string.
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
     * Converts this string to a new character array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toCharArray
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toCharArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts all of the characters in this String to lower case using the rules of the default locale.
     * Converts all of the characters in this String to lower case using the rules of the given Locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toLowerCase
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toLowerCase($a = null)
    {
        $locale = $a;
        if ($locale) {
            throw new NotImplementedException(__METHOD__);
        }

        return new static(strtolower($this));
    }

    /**
     * This object (which is already a string!).
     *
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     */
    public function toString(): string
    {
        return $this->__toString();
    }

    /**
     * Converts all of the characters in this String to upper case using the rules of the default locale.
     * Converts all of the characters in this String to upper case using the rules of the given Locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toUpperCase
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toUpperCase($a = null)
    {
        $locale = $a;
        if ($locale) {
            throw new NotImplementedException(__METHOD__);
        }

        return new static(strtoupper($this));
    }

    /**
     * Returns a string whose value is this string, with all leading and trailing space removed, where space is defined as any character whose codepoint is less than or equal to 'U+0020' (the space character).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#trim
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function trim($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of the boolean argument.
     * Returns the string representation of the char argument.
     * Returns the string representation of the char array argument.
     * Returns the string representation of a specific subarray of the char array argument.
     * Returns the string representation of the double argument.
     * Returns the string representation of the float argument.
     * Returns the string representation of the int argument.
     * Returns the string representation of the long argument.
     * Returns the string representation of the Object argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_valueOf($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    public function __toString(): string
    {
        if (!($this->object instanceof _Utf8)) {
            return (string) $this->object;
        }
        return $this->object->getString();
    }
}
