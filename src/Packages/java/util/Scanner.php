<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;
// use PHPJava\Packages\java\util\Iterator;
// use PHPJava\Packages\java\nio\channels\ReadableByteChannel;
// use PHPJava\Packages\java\nio\file\Path;
// use PHPJava\Packages\java\util\stream\Stream;
// use PHPJava\Packages\java\util\regex\MatchResult;

/**
 * The `Scanner` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Scanner extends _Object // implements Closeable, AutoCloseable, Iterator, ReadableByteChannel, Path, Stream, MatchResult
{
    /**
     * Closes this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#close
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the Pattern this Scanner is currently using to match delimiters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#delimiter
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function delimiter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of match results that match the provided pattern string.
     * Returns a stream of match results from this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#findAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Attempts to find the next occurrence of a pattern constructed from the specified string, ignoring delimiters.
     * Attempts to find the next occurrence of the specified pattern ignoring delimiters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#findInLine
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findInLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Attempts to find the next occurrence of a pattern constructed from the specified string, ignoring delimiters.
     * Attempts to find the next occurrence of the specified pattern.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#findWithinHorizon
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function findWithinHorizon($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this scanner has another token in its input.
     * Returns true if the next token matches the pattern constructed from the specified string.
     * Returns true if the next complete token matches the specified pattern.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNext
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNext($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a BigDecimal using the nextBigDecimal() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextBigDecimal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextBigDecimal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a BigInteger in the default radix using the nextBigInteger() method.
     * Returns true if the next token in this scanner's input can be interpreted as a BigInteger in the specified radix using the nextBigInteger() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextBigInteger
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextBigInteger($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a boolean value using a case insensitive pattern created from the string "true|false".
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextBoolean
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextBoolean($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a byte value in the default radix using the nextByte() method.
     * Returns true if the next token in this scanner's input can be interpreted as a byte value in the specified radix using the nextByte() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextByte
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a double value using the nextDouble() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextDouble
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextDouble($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a float value using the nextFloat() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextFloat
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextFloat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as an int value in the default radix using the nextInt() method.
     * Returns true if the next token in this scanner's input can be interpreted as an int value in the specified radix using the nextInt() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextInt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextInt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if there is another line in the input of this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextLine
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a long value in the default radix using the nextLong() method.
     * Returns true if the next token in this scanner's input can be interpreted as a long value in the specified radix using the nextLong() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextLong
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the next token in this scanner's input can be interpreted as a short value in the default radix using the nextShort() method.
     * Returns true if the next token in this scanner's input can be interpreted as a short value in the specified radix using the nextShort() method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasNextShort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasNextShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the IOException last thrown by this Scanner's underlying Readable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ioException
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ioException($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this scanner's locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#locale
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function locale($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the match result of the last scanning operation performed by this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#match
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function match($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds and returns the next complete token from this scanner.
     * Returns the next token if it matches the pattern constructed from the specified string.
     * Returns the next token if it matches the specified pattern.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#next
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function next($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a BigDecimal.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextBigDecimal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextBigDecimal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a BigInteger.
     * Scans the next token of the input as a BigInteger.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextBigInteger
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextBigInteger($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input into a boolean value and returns that value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextBoolean
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextBoolean($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a byte.
     * Scans the next token of the input as a byte.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextByte
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a double.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextDouble
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextDouble($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a float.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextFloat
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextFloat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as an int.
     * Scans the next token of the input as an int.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextInt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextInt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Advances this scanner past the current line and returns the input that was skipped.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextLine
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a long.
     * Scans the next token of the input as a long.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextLong
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Scans the next token of the input as a short.
     * Scans the next token of the input as a short.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nextShort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this scanner's default radix.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#radix
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function radix($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The remove operation is not supported by this implementation of Iterator.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#remove
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function remove($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Resets this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#reset
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function reset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Skips input that matches a pattern constructed from the specified string.
     * Skips input that matches the specified pattern, ignoring delimiters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#skip
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function skip($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream of delimiter-separated tokens from this scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#tokens
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function tokens($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of this Scanner.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this scanner's delimiting pattern to a pattern constructed from the specified String.
     * Sets this scanner's delimiting pattern to the specified pattern.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#useDelimiter
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function useDelimiter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this scanner's locale to the specified locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#useLocale
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function useLocale($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this scanner's default radix to the specified radix.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#useRadix
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function useRadix($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
