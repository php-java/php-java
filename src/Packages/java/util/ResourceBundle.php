<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\spi\service provider;
// use PHPJava\Packages\java\util\Set;

/**
 * The `ResourceBundle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ResourceBundle extends _Object // implements service provider, Set
{
    /**
     * The parent bundle of this bundle.
     *
     * @var mixed $parent
     */
    protected $parent;

    /**
     * Removes all resource bundles from the cache that have been loaded by the caller's module.
     * Removes all resource bundles from the cache that have been loaded by the given class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clearCache
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_clearCache($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the given key is contained in this ResourceBundle or its parent bundles.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#containsKey
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function containsKey($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the base name of this bundle, if known, or null if unknown.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getBaseBundleName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getBaseBundleName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets a resource bundle using the specified base name, the default locale, and the caller module.
     * Gets a resource bundle using the specified base name and the default locale on behalf of the specified module.
     * Gets a resource bundle using the specified base name and locale, and the caller module.
     * Gets a resource bundle using the specified base name, locale, and class loader.
     * Returns a resource bundle using the specified base name, target locale, class loader and control.
     * Gets a resource bundle using the specified base name and locale on behalf of the specified module.
     * Returns a resource bundle using the specified base name, target locale and control, and the caller's class loader.
     * Returns a resource bundle using the specified base name, the default locale and the specified control.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getBundle
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public static function static_getBundle($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of the keys.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getKeys
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the locale of this resource bundle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getLocale
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocale($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets an object for the given key from this resource bundle or one of its parents.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets a string for the given key from this resource bundle or one of its parents.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets a string array for the given key from this resource bundle or one of its parents.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getStringArray
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getStringArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets an object for the given key from this resource bundle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleGetObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function handleGetObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of the keys contained only in this ResourceBundle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleKeySet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function handleKeySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of all keys contained in this ResourceBundle and its parent bundles.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#keySet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function keySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the parent bundle of this bundle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setParent
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function setParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
