<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;
// use PHPJava\Packages\java\util\Collection;

/**
 * The `Locale` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Locale extends _Object /* implements Serializable, Cloneable, Collection */
{
    /**
     * Useful constant for country.
     *
     * @var mixed $CANADA
     */
    public static $CANADA = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $CANADA_FRENCH
     */
    public static $CANADA_FRENCH = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $CHINA
     */
    public static $CHINA = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $CHINESE
     */
    public static $CHINESE = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $ENGLISH
     */
    public static $ENGLISH = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $FRANCE
     */
    public static $FRANCE = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $FRENCH
     */
    public static $FRENCH = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $GERMAN
     */
    public static $GERMAN = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $GERMANY
     */
    public static $GERMANY = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $ITALIAN
     */
    public static $ITALIAN = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $ITALY
     */
    public static $ITALY = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $JAPAN
     */
    public static $JAPAN = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $JAPANESE
     */
    public static $JAPANESE = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $KOREA
     */
    public static $KOREA = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $KOREAN
     */
    public static $KOREAN = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $PRC
     */
    public static $PRC = null;

    /**
     * The key for the private use extension ('x').
     *
     * @var mixed $PRIVATE_USE_EXTENSION
     */
    public static $PRIVATE_USE_EXTENSION = null;

    /**
     * Useful constant for the root locale.
     *
     * @var mixed $ROOT
     */
    public static $ROOT = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $SIMPLIFIED_CHINESE
     */
    public static $SIMPLIFIED_CHINESE = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $TAIWAN
     */
    public static $TAIWAN = null;

    /**
     * Useful constant for language.
     *
     * @var mixed $TRADITIONAL_CHINESE
     */
    public static $TRADITIONAL_CHINESE = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $UK
     */
    public static $UK = null;

    /**
     * The key for Unicode locale extension ('u').
     *
     * @var mixed $UNICODE_LOCALE_EXTENSION
     */
    public static $UNICODE_LOCALE_EXTENSION = null;

    /**
     * Useful constant for country.
     *
     * @var mixed $US
     */
    public static $US = null;


    /**
     * Overrides Cloneable.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clone
     */
    public function clone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this Locale is equal to another object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a list of matching Locale instances using the filtering mechanism defined in RFC 4647.
     * Returns a list of matching Locale instances using the filtering mechanism defined in RFC 4647.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#filter
     */
    public static function static_filter($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a list of matching languages tags using the basic filtering mechanism defined in RFC 4647.
     * Returns a list of matching languages tags using the basic filtering mechanism defined in RFC 4647.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#filterTags
     */
    public static function static_filterTags($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a locale for the specified IETF BCP 47 language tag string.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#forLanguageTag
     */
    public static function static_forLanguageTag($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of all installed locales.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getAvailableLocales
     */
    public static function static_getAvailableLocales($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the country/region code for this locale, which should either be the empty string, an uppercase ISO 3166 2-letter code, or a UN M.49 3-digit code.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getCountry
     */
    public function getCountry($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the current value of the default locale for this instance of the Java Virtual Machine.
     * Gets the current value of the default locale for the specified Category for this instance of the Java Virtual Machine.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDefault
     */
    public static function static_getDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a name for the locale's country that is appropriate for display to the user.
     * Returns a name for the locale's country that is appropriate for display to the user.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayCountry
     */
    public function getDisplayCountry($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a name for the locale's language that is appropriate for display to the user.
     * Returns a name for the locale's language that is appropriate for display to the user.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayLanguage
     */
    public function getDisplayLanguage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a name for the locale that is appropriate for display to the user.
     * Returns a name for the locale that is appropriate for display to the user.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayName
     */
    public function getDisplayName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a name for the locale's script that is appropriate for display to the user.
     * Returns a name for the locale's script that is appropriate for display to the user.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayScript
     */
    public function getDisplayScript($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a name for the locale's variant code that is appropriate for display to the user.
     * Returns a name for the locale's variant code that is appropriate for display to the user.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayVariant
     */
    public function getDisplayVariant($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the extension (or private use) value associated with the specified key, or null if there is no extension associated with the key.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getExtension
     */
    public function getExtension($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the set of extension keys associated with this locale, or the empty set if it has no extensions.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getExtensionKeys
     */
    public function getExtensionKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a three-letter abbreviation for this locale's country.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getISO3Country
     */
    public function getISO3Country($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a three-letter abbreviation of this locale's language.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getISO3Language
     */
    public function getISO3Language($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a list of all 2-letter country codes defined in ISO 3166.
     * Returns a Set of ISO3166 country codes for the specified type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getISOCountries
     */
    public static function static_getISOCountries($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a list of all 2-letter language codes defined in ISO 639.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getISOLanguages
     */
    public static function static_getISOLanguages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the language code of this Locale.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getLanguage
     */
    public function getLanguage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the script for this locale, which should either be the empty string or an ISO 15924 4-letter script code.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getScript
     */
    public function getScript($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the set of unicode locale attributes associated with this locale, or the empty set if it has no attributes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getUnicodeLocaleAttributes
     */
    public function getUnicodeLocaleAttributes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the set of Unicode locale keys defined by this locale, or the empty set if this locale has none.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getUnicodeLocaleKeys
     */
    public function getUnicodeLocaleKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the Unicode locale type associated with the specified Unicode locale key for this locale.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getUnicodeLocaleType
     */
    public function getUnicodeLocaleType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the variant code for this locale.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getVariant
     */
    public function getVariant($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this Locale has any  extensions.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasExtensions
     */
    public function hasExtensions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Override hashCode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Locale instance for the best-matching language tag using the lookup mechanism defined in RFC 4647.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lookup
     */
    public static function static_lookup($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the best-matching language tag using the lookup mechanism defined in RFC 4647.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lookupTag
     */
    public static function static_lookupTag($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default locale for this instance of the Java Virtual Machine.
     * Sets the default locale for the specified Category for this instance of the Java Virtual Machine.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setDefault
     */
    public static function static_setDefault($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a copy of this Locale with no  extensions.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#stripExtensions
     */
    public function stripExtensions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a well-formed IETF BCP 47 language tag representing this locale.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toLanguageTag
     */
    public function toLanguageTag($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this Locale object, consisting of language, country, variant, script, and extensions as below:  language + "_" + country + "_" + (variant + "_#" | "#") + script + "_" + extensions  Language is always lower case, country is always upper case, script is always title case, and extensions are always lower case.
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
