<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `Character` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Character extends _Object /* implements Serializable, Comparable */
{
    /**
     * The number of bytes used to represent a char value in unsigned binary form.
     *
     * @var mixed $BYTES
     */
    public static $BYTES = null;

    /**
     * General category "Mc" in the Unicode specification.
     *
     * @var mixed $COMBINING_SPACING_MARK
     */
    public static $COMBINING_SPACING_MARK = null;

    /**
     * General category "Pc" in the Unicode specification.
     *
     * @var mixed $CONNECTOR_PUNCTUATION
     */
    public static $CONNECTOR_PUNCTUATION = null;

    /**
     * General category "Cc" in the Unicode specification.
     *
     * @var mixed $CONTROL
     */
    public static $CONTROL = null;

    /**
     * General category "Sc" in the Unicode specification.
     *
     * @var mixed $CURRENCY_SYMBOL
     */
    public static $CURRENCY_SYMBOL = null;

    /**
     * General category "Pd" in the Unicode specification.
     *
     * @var mixed $DASH_PUNCTUATION
     */
    public static $DASH_PUNCTUATION = null;

    /**
     * General category "Nd" in the Unicode specification.
     *
     * @var mixed $DECIMAL_DIGIT_NUMBER
     */
    public static $DECIMAL_DIGIT_NUMBER = null;

    /**
     * Weak bidirectional character type "AN" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_ARABIC_NUMBER
     */
    public static $DIRECTIONALITY_ARABIC_NUMBER = null;

    /**
     * Weak bidirectional character type "BN" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_BOUNDARY_NEUTRAL
     */
    public static $DIRECTIONALITY_BOUNDARY_NEUTRAL = null;

    /**
     * Weak bidirectional character type "CS" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_COMMON_NUMBER_SEPARATOR
     */
    public static $DIRECTIONALITY_COMMON_NUMBER_SEPARATOR = null;

    /**
     * Weak bidirectional character type "EN" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_EUROPEAN_NUMBER
     */
    public static $DIRECTIONALITY_EUROPEAN_NUMBER = null;

    /**
     * Weak bidirectional character type "ES" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_EUROPEAN_NUMBER_SEPARATOR
     */
    public static $DIRECTIONALITY_EUROPEAN_NUMBER_SEPARATOR = null;

    /**
     * Weak bidirectional character type "ET" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_EUROPEAN_NUMBER_TERMINATOR
     */
    public static $DIRECTIONALITY_EUROPEAN_NUMBER_TERMINATOR = null;

    /**
     * Weak bidirectional character type "FSI" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_FIRST_STRONG_ISOLATE
     */
    public static $DIRECTIONALITY_FIRST_STRONG_ISOLATE = null;

    /**
     * Strong bidirectional character type "L" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_LEFT_TO_RIGHT
     */
    public static $DIRECTIONALITY_LEFT_TO_RIGHT = null;

    /**
     * Strong bidirectional character type "LRE" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_LEFT_TO_RIGHT_EMBEDDING
     */
    public static $DIRECTIONALITY_LEFT_TO_RIGHT_EMBEDDING = null;

    /**
     * Weak bidirectional character type "LRI" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_LEFT_TO_RIGHT_ISOLATE
     */
    public static $DIRECTIONALITY_LEFT_TO_RIGHT_ISOLATE = null;

    /**
     * Strong bidirectional character type "LRO" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_LEFT_TO_RIGHT_OVERRIDE
     */
    public static $DIRECTIONALITY_LEFT_TO_RIGHT_OVERRIDE = null;

    /**
     * Weak bidirectional character type "NSM" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_NONSPACING_MARK
     */
    public static $DIRECTIONALITY_NONSPACING_MARK = null;

    /**
     * Neutral bidirectional character type "ON" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_OTHER_NEUTRALS
     */
    public static $DIRECTIONALITY_OTHER_NEUTRALS = null;

    /**
     * Neutral bidirectional character type "B" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_PARAGRAPH_SEPARATOR
     */
    public static $DIRECTIONALITY_PARAGRAPH_SEPARATOR = null;

    /**
     * Weak bidirectional character type "PDF" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_POP_DIRECTIONAL_FORMAT
     */
    public static $DIRECTIONALITY_POP_DIRECTIONAL_FORMAT = null;

    /**
     * Weak bidirectional character type "PDI" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_POP_DIRECTIONAL_ISOLATE
     */
    public static $DIRECTIONALITY_POP_DIRECTIONAL_ISOLATE = null;

    /**
     * Strong bidirectional character type "R" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_RIGHT_TO_LEFT
     */
    public static $DIRECTIONALITY_RIGHT_TO_LEFT = null;

    /**
     * Strong bidirectional character type "AL" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_RIGHT_TO_LEFT_ARABIC
     */
    public static $DIRECTIONALITY_RIGHT_TO_LEFT_ARABIC = null;

    /**
     * Strong bidirectional character type "RLE" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_RIGHT_TO_LEFT_EMBEDDING
     */
    public static $DIRECTIONALITY_RIGHT_TO_LEFT_EMBEDDING = null;

    /**
     * Weak bidirectional character type "RLI" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_RIGHT_TO_LEFT_ISOLATE
     */
    public static $DIRECTIONALITY_RIGHT_TO_LEFT_ISOLATE = null;

    /**
     * Strong bidirectional character type "RLO" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_RIGHT_TO_LEFT_OVERRIDE
     */
    public static $DIRECTIONALITY_RIGHT_TO_LEFT_OVERRIDE = null;

    /**
     * Neutral bidirectional character type "S" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_SEGMENT_SEPARATOR
     */
    public static $DIRECTIONALITY_SEGMENT_SEPARATOR = null;

    /**
     * Undefined bidirectional character type.
     *
     * @var mixed $DIRECTIONALITY_UNDEFINED
     */
    public static $DIRECTIONALITY_UNDEFINED = null;

    /**
     * Neutral bidirectional character type "WS" in the Unicode specification.
     *
     * @var mixed $DIRECTIONALITY_WHITESPACE
     */
    public static $DIRECTIONALITY_WHITESPACE = null;

    /**
     * General category "Me" in the Unicode specification.
     *
     * @var mixed $ENCLOSING_MARK
     */
    public static $ENCLOSING_MARK = null;

    /**
     * General category "Pe" in the Unicode specification.
     *
     * @var mixed $END_PUNCTUATION
     */
    public static $END_PUNCTUATION = null;

    /**
     * General category "Pf" in the Unicode specification.
     *
     * @var mixed $FINAL_QUOTE_PUNCTUATION
     */
    public static $FINAL_QUOTE_PUNCTUATION = null;

    /**
     * General category "Cf" in the Unicode specification.
     *
     * @var mixed $FORMAT
     */
    public static $FORMAT = null;

    /**
     * General category "Pi" in the Unicode specification.
     *
     * @var mixed $INITIAL_QUOTE_PUNCTUATION
     */
    public static $INITIAL_QUOTE_PUNCTUATION = null;

    /**
     * General category "Nl" in the Unicode specification.
     *
     * @var mixed $LETTER_NUMBER
     */
    public static $LETTER_NUMBER = null;

    /**
     * General category "Zl" in the Unicode specification.
     *
     * @var mixed $LINE_SEPARATOR
     */
    public static $LINE_SEPARATOR = null;

    /**
     * General category "Ll" in the Unicode specification.
     *
     * @var mixed $LOWERCASE_LETTER
     */
    public static $LOWERCASE_LETTER = null;

    /**
     * General category "Sm" in the Unicode specification.
     *
     * @var mixed $MATH_SYMBOL
     */
    public static $MATH_SYMBOL = null;

    /**
     * The maximum value of a  Unicode code point, constant U+10FFFF.
     *
     * @var mixed $MAX_CODE_POINT
     */
    public static $MAX_CODE_POINT = null;

    /**
     * The maximum value of a  Unicode high-surrogate code unit in the UTF-16 encoding, constant '\uDBFF'.
     *
     * @var mixed $MAX_HIGH_SURROGATE
     */
    public static $MAX_HIGH_SURROGATE = null;

    /**
     * The maximum value of a  Unicode low-surrogate code unit in the UTF-16 encoding, constant '\uDFFF'.
     *
     * @var mixed $MAX_LOW_SURROGATE
     */
    public static $MAX_LOW_SURROGATE = null;

    /**
     * The maximum radix available for conversion to and from strings.
     *
     * @var mixed $MAX_RADIX
     */
    public static $MAX_RADIX = null;

    /**
     * The maximum value of a Unicode surrogate code unit in the UTF-16 encoding, constant '\uDFFF'.
     *
     * @var mixed $MAX_SURROGATE
     */
    public static $MAX_SURROGATE = null;

    /**
     * The constant value of this field is the largest value of type char, '\uFFFF'.
     *
     * @var mixed $MAX_VALUE
     */
    public static $MAX_VALUE = null;

    /**
     * The minimum value of a  Unicode code point, constant U+0000.
     *
     * @var mixed $MIN_CODE_POINT
     */
    public static $MIN_CODE_POINT = null;

    /**
     * The minimum value of a  Unicode high-surrogate code unit in the UTF-16 encoding, constant '\uD800'.
     *
     * @var mixed $MIN_HIGH_SURROGATE
     */
    public static $MIN_HIGH_SURROGATE = null;

    /**
     * The minimum value of a  Unicode low-surrogate code unit in the UTF-16 encoding, constant '\uDC00'.
     *
     * @var mixed $MIN_LOW_SURROGATE
     */
    public static $MIN_LOW_SURROGATE = null;

    /**
     * The minimum radix available for conversion to and from strings.
     *
     * @var mixed $MIN_RADIX
     */
    public static $MIN_RADIX = null;

    /**
     * The minimum value of a  Unicode supplementary code point, constant U+10000.
     *
     * @var mixed $MIN_SUPPLEMENTARY_CODE_POINT
     */
    public static $MIN_SUPPLEMENTARY_CODE_POINT = null;

    /**
     * The minimum value of a Unicode surrogate code unit in the UTF-16 encoding, constant '\uD800'.
     *
     * @var mixed $MIN_SURROGATE
     */
    public static $MIN_SURROGATE = null;

    /**
     * The constant value of this field is the smallest value of type char, '\u0000'.
     *
     * @var mixed $MIN_VALUE
     */
    public static $MIN_VALUE = null;

    /**
     * General category "Lm" in the Unicode specification.
     *
     * @var mixed $MODIFIER_LETTER
     */
    public static $MODIFIER_LETTER = null;

    /**
     * General category "Sk" in the Unicode specification.
     *
     * @var mixed $MODIFIER_SYMBOL
     */
    public static $MODIFIER_SYMBOL = null;

    /**
     * General category "Mn" in the Unicode specification.
     *
     * @var mixed $NON_SPACING_MARK
     */
    public static $NON_SPACING_MARK = null;

    /**
     * General category "Lo" in the Unicode specification.
     *
     * @var mixed $OTHER_LETTER
     */
    public static $OTHER_LETTER = null;

    /**
     * General category "No" in the Unicode specification.
     *
     * @var mixed $OTHER_NUMBER
     */
    public static $OTHER_NUMBER = null;

    /**
     * General category "Po" in the Unicode specification.
     *
     * @var mixed $OTHER_PUNCTUATION
     */
    public static $OTHER_PUNCTUATION = null;

    /**
     * General category "So" in the Unicode specification.
     *
     * @var mixed $OTHER_SYMBOL
     */
    public static $OTHER_SYMBOL = null;

    /**
     * General category "Zp" in the Unicode specification.
     *
     * @var mixed $PARAGRAPH_SEPARATOR
     */
    public static $PARAGRAPH_SEPARATOR = null;

    /**
     * General category "Co" in the Unicode specification.
     *
     * @var mixed $PRIVATE_USE
     */
    public static $PRIVATE_USE = null;

    /**
     * The number of bits used to represent a char value in unsigned binary form, constant 16.
     *
     * @var mixed $SIZE
     */
    public static $SIZE = null;

    /**
     * General category "Zs" in the Unicode specification.
     *
     * @var mixed $SPACE_SEPARATOR
     */
    public static $SPACE_SEPARATOR = null;

    /**
     * General category "Ps" in the Unicode specification.
     *
     * @var mixed $START_PUNCTUATION
     */
    public static $START_PUNCTUATION = null;

    /**
     * General category "Cs" in the Unicode specification.
     *
     * @var mixed $SURROGATE
     */
    public static $SURROGATE = null;

    /**
     * General category "Lt" in the Unicode specification.
     *
     * @var mixed $TITLECASE_LETTER
     */
    public static $TITLECASE_LETTER = null;

    /**
     * The Class instance representing the primitive type char.
     *
     * @var mixed $TYPE
     */
    public static $TYPE = null;

    /**
     * General category "Cn" in the Unicode specification.
     *
     * @var mixed $UNASSIGNED
     */
    public static $UNASSIGNED = null;

    /**
     * General category "Lu" in the Unicode specification.
     *
     * @var mixed $UPPERCASE_LETTER
     */
    public static $UPPERCASE_LETTER = null;


    /**
     * Determines the number of char values needed to represent the specified character (Unicode code point).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#charCount
     */
    public static function static_charCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Character object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#charValue
     */
    public function charValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the code point at the given index of the char array.
     * Returns the code point at the given index of the char array, where only array elements with index less than limit can be used.
     * Returns the code point at the given index of the CharSequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointAt
     */
    public static function static_codePointAt($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the code point preceding the given index of the char array.
     * Returns the code point preceding the given index of the char array, where only array elements with index greater than or equal to start can be used.
     * Returns the code point preceding the given index of the CharSequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointBefore
     */
    public static function static_codePointBefore($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of Unicode code points in a subarray of the char array argument.
     * Returns the number of Unicode code points in the text range of the specified char sequence.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointCount
     */
    public static function static_codePointCount($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the code point value of the Unicode character specified by the given Unicode character name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#codePointOf
     */
    public static function static_codePointOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two char values numerically.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compare
     */
    public static function static_compare($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two Character objects numerically.
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
     * Returns the numeric value of the character ch in the specified radix.
     * Returns the numeric value of the specified character (Unicode code point) in the specified radix.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#digit
     */
    public static function static_digit($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares this object against the specified object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines the character representation for a specific digit in the specified radix.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#forDigit
     */
    public static function static_forDigit($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the Unicode directionality property for the given character.
     * Returns the Unicode directionality property for the given character (Unicode code point).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDirectionality
     */
    public static function static_getDirectionality($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the Unicode name of the specified character codePoint, or null if the code point is unassigned.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     */
    public static function static_getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the int value that the specified Unicode character represents.
     * Returns the int value that the specified character (Unicode code point) represents.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getNumericValue
     */
    public static function static_getNumericValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a value indicating a character's general category.
     * Returns a value indicating a character's general category.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getType
     */
    public static function static_getType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a hash code for this Character; equal to the result of invoking charValue().
     * Returns a hash code for a char value; compatible with Character.hashCode().
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     */
    public static function static_hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the leading surrogate (a  high surrogate code unit) of the  surrogate pair representing the specified supplementary character (Unicode code point) in the UTF-16 encoding.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#highSurrogate
     */
    public static function static_highSurrogate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character (Unicode code point) is an alphabet.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlphabetic
     */
    public static function static_isAlphabetic($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the specified character (Unicode code point) is in the Basic Multilingual Plane (BMP).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isBmpCodePoint
     */
    public static function static_isBmpCodePoint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if a character is defined in Unicode.
     * Determines if a character (Unicode code point) is defined in Unicode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isDefined
     */
    public static function static_isDefined($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a digit.
     * Determines if the specified character (Unicode code point) is a digit.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isDigit
     */
    public static function static_isDigit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given char value is a  Unicode high-surrogate code unit (also known as leading-surrogate code unit).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isHighSurrogate
     */
    public static function static_isHighSurrogate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character should be regarded as an ignorable character in a Java identifier or a Unicode identifier.
     * Determines if the specified character (Unicode code point) should be regarded as an ignorable character in a Java identifier or a Unicode identifier.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isIdentifierIgnorable
     */
    public static function static_isIdentifierIgnorable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character (Unicode code point) is a CJKV (Chinese, Japanese, Korean and Vietnamese) ideograph, as defined by the Unicode Standard.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isIdeographic
     */
    public static function static_isIdeographic($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is an ISO control character.
     * Determines if the referenced character (Unicode code point) is an ISO control character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isISOControl
     */
    public static function static_isISOControl($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character may be part of a Java identifier as other than the first character.
     * Determines if the character (Unicode code point) may be part of a Java identifier as other than the first character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isJavaIdentifierPart
     */
    public static function static_isJavaIdentifierPart($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is permissible as the first character in a Java identifier.
     * Determines if the character (Unicode code point) is permissible as the first character in a Java identifier.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isJavaIdentifierStart
     */
    public static function static_isJavaIdentifierStart($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Replaced by isJavaIdentifierStart(char).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isJavaLetter
     */
    public static function static_isJavaLetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Replaced by isJavaIdentifierPart(char).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isJavaLetterOrDigit
     */
    public static function static_isJavaLetterOrDigit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a letter.
     * Determines if the specified character (Unicode code point) is a letter.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isLetter
     */
    public static function static_isLetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a letter or digit.
     * Determines if the specified character (Unicode code point) is a letter or digit.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isLetterOrDigit
     */
    public static function static_isLetterOrDigit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a lowercase character.
     * Determines if the specified character (Unicode code point) is a lowercase character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isLowerCase
     */
    public static function static_isLowerCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given char value is a  Unicode low-surrogate code unit (also known as trailing-surrogate code unit).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isLowSurrogate
     */
    public static function static_isLowSurrogate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the character is mirrored according to the Unicode specification.
     * Determines whether the specified character (Unicode code point) is mirrored according to the Unicode specification.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isMirrored
     */
    public static function static_isMirrored($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Replaced by isWhitespace(char).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSpace
     */
    public static function static_isSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a Unicode space character.
     * Determines if the specified character (Unicode code point) is a Unicode space character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSpaceChar
     */
    public static function static_isSpaceChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the specified character (Unicode code point) is in the supplementary character range.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSupplementaryCodePoint
     */
    public static function static_isSupplementaryCodePoint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given char value is a Unicode surrogate code unit.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSurrogate
     */
    public static function static_isSurrogate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the specified pair of char values is a valid  Unicode surrogate pair.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSurrogatePair
     */
    public static function static_isSurrogatePair($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is a titlecase character.
     * Determines if the specified character (Unicode code point) is a titlecase character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isTitleCase
     */
    public static function static_isTitleCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character may be part of a Unicode identifier as other than the first character.
     * Determines if the specified character (Unicode code point) may be part of a Unicode identifier as other than the first character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isUnicodeIdentifierPart
     */
    public static function static_isUnicodeIdentifierPart($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is permissible as the first character in a Unicode identifier.
     * Determines if the specified character (Unicode code point) is permissible as the first character in a Unicode identifier.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isUnicodeIdentifierStart
     */
    public static function static_isUnicodeIdentifierStart($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is an uppercase character.
     * Determines if the specified character (Unicode code point) is an uppercase character.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isUpperCase
     */
    public static function static_isUpperCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the specified code point is a valid  Unicode code point value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isValidCodePoint
     */
    public static function static_isValidCodePoint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the specified character is white space according to Java.
     * Determines if the specified character (Unicode code point) is white space according to Java.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isWhitespace
     */
    public static function static_isWhitespace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the trailing surrogate (a  low surrogate code unit) of the  surrogate pair representing the specified supplementary character (Unicode code point) in the UTF-16 encoding.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lowSurrogate
     */
    public static function static_lowSurrogate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index within the given char subarray that is offset from the given index by codePointOffset code points.
     * Returns the index within the given char sequence that is offset from the given index by codePointOffset code points.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#offsetByCodePoints
     */
    public static function static_offsetByCodePoints($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value obtained by reversing the order of the bytes in the specified char value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#reverseBytes
     */
    public static function static_reverseBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the specified character (Unicode code point) to its UTF-16 representation stored in a char array.
     * Converts the specified character (Unicode code point) to its UTF-16 representation.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toChars
     */
    public static function static_toChars($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the specified surrogate pair to its supplementary code point value.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toCodePoint
     */
    public static function static_toCodePoint($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the character argument to lowercase using case mapping information from the UnicodeData file.
     * Converts the character (Unicode code point) argument to lowercase using case mapping information from the UnicodeData file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toLowerCase
     */
    public static function static_toLowerCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String object representing this Character's value.
     * Returns a String object representing the specified char.
     * Returns a String object representing the specified character (Unicode code point).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     */
    public static function static_toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the character argument to titlecase using case mapping information from the UnicodeData file.
     * Converts the character (Unicode code point) argument to titlecase using case mapping information from the UnicodeData file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toTitleCase
     */
    public static function static_toTitleCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the character argument to uppercase using case mapping information from the UnicodeData file.
     * Converts the character (Unicode code point) argument to uppercase using case mapping information from the UnicodeData file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toUpperCase
     */
    public static function static_toUpperCase($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Character instance representing the specified char value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
