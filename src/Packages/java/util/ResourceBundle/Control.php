<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util\ResourceBundle;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\util\_List;

/**
 * The `Control` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class Control extends Object_ // implements _List
{
    /**
     * The class-only format List containing "java.class".
     *
     * @var mixed $FORMAT_CLASS
     */
    public static $FORMAT_CLASS = null;

    /**
     * The default format List, which contains the strings "java.class" and "java.properties", in this order.
     *
     * @var mixed $FORMAT_DEFAULT
     */
    public static $FORMAT_DEFAULT = null;

    /**
     * The properties-only format List containing "java.properties".
     *
     * @var mixed $FORMAT_PROPERTIES
     */
    public static $FORMAT_PROPERTIES = null;

    /**
     * The time-to-live constant for not caching loaded resource bundle instances.
     *
     * @var mixed $TTL_DONT_CACHE
     */
    public static $TTL_DONT_CACHE = null;

    /**
     * The time-to-live constant for disabling the expiration control for loaded resource bundle instances in the cache.
     *
     * @var mixed $TTL_NO_EXPIRATION_CONTROL
     */
    public static $TTL_NO_EXPIRATION_CONTROL = null;

    /**
     * Returns a List of Locales as candidate locales for baseName and locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getCandidateLocales
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getCandidateLocales($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a ResourceBundle.Control in which the getFormats method returns the specified formats.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getControl
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getControl($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Locale to be used as a fallback locale for further resource bundle searches by the ResourceBundle.getBundle factory method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getFallbackLocale
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getFallbackLocale($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a List of Strings containing formats to be used to load resource bundles for the given baseName.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getFormats
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFormats($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a ResourceBundle.Control in which the getFormats method returns the specified formats and the getFallbackLocale method returns null.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getNoFallbackControl
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getNoFallbackControl($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the time-to-live (TTL) value for resource bundles that are loaded under this ResourceBundle.Control.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTimeToLive
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getTimeToLive($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the expired bundle in the cache needs to be reloaded based on the loading time given by loadTime or some other criteria.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#needsReload
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @param null|mixed $f
     * @throws NotImplementedException
     */
    public function needsReload($a = null, $b = null, $c = null, $d = null, $e = null, $f = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Instantiates a resource bundle for the given bundle name of the given format and locale, using the given class loader if necessary.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#newBundle
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public function newBundle($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the given baseName and locale to the bundle name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toBundleName
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function toBundleName($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the given bundleName to the form required by the ClassLoader.getResource method by replacing all occurrences of '.' in bundleName with '/' and appending a '.' and the given file suffix.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toResourceName
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function toResourceName($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
