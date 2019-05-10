<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `StreamTokenizer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StreamTokenizer extends _Object
{
    /**
     * If the current token is a number, this field contains the value of that number.
     *
     * @var mixed $nval
     */
    public $nval;

    /**
     * If the current token is a word token, this field contains a string giving the characters of the word token.
     *
     * @var mixed $sval
     */
    public $sval;

    /**
     * A constant indicating that the end of the stream has been read.
     *
     * @var mixed $TT_EOF
     */
    public static $TT_EOF = null;

    /**
     * A constant indicating that the end of the line has been read.
     *
     * @var mixed $TT_EOL
     */
    public static $TT_EOL = null;

    /**
     * A constant indicating that a number token has been read.
     *
     * @var mixed $TT_NUMBER
     */
    public static $TT_NUMBER = null;

    /**
     * A constant indicating that a word token has been read.
     *
     * @var mixed $TT_WORD
     */
    public static $TT_WORD = null;

    /**
     * After a call to the nextToken method, this field contains the type of the token just read.
     *
     * @var mixed $ttype
     */
    public $ttype;

    /**
     * Specified that the character argument starts a single-line comment.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#commentChar
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function commentChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether or not ends of line are treated as tokens.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#eolIsSignificant
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function eolIsSignificant($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the current line number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lineno
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lineno($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether or not word token are automatically lowercased.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lowerCaseMode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lowerCaseMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Parses the next token from the input stream of this tokenizer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#nextToken
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function nextToken($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that the character argument is "ordinary" in this tokenizer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#ordinaryChar
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ordinaryChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that all characters c in the range low&nbsp;&lt;=&nbsp;c&nbsp;&lt;=&nbsp;high are "ordinary" in this tokenizer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#ordinaryChars
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function ordinaryChars($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that numbers should be parsed by this tokenizer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#parseNumbers
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function parseNumbers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes the next call to the nextToken method of this tokenizer to return the current value in the ttype field, and not to modify the value in the nval or sval field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#pushBack
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function pushBack($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that matching pairs of this character delimit string constants in this tokenizer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#quoteChar
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function quoteChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Resets this tokenizer's syntax table so that all characters are "ordinary.".
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#resetSyntax
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function resetSyntax($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether or not the tokenizer recognizes C++-style comments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#slashSlashComments
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function slashSlashComments($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether or not the tokenizer recognizes C-style comments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#slashStarComments
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function slashStarComments($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of the current stream token and the line number it occurs on.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that all characters c in the range low&nbsp;&lt;=&nbsp;c&nbsp;&lt;=&nbsp;high are white space characters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#whitespaceChars
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function whitespaceChars($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies that all characters c in the range low&nbsp;&lt;=&nbsp;c&nbsp;&lt;=&nbsp;high are word constituents.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#wordChars
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function wordChars($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
