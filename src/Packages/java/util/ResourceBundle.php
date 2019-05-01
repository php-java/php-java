<?php
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
class ResourceBundle extends _Object /* implements service provider, Set */
{
    /**
     * The parent bundle of this bundle.
     *
     * @var mixed $parent
     */
    protected $parent = null;


    /**
     * Removes all resource bundles from the cache that have been loaded by the caller's module.
     * Removes all resource bundles from the cache that have been loaded by the given class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clearCache
     */
    public static function static_clearCache($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the given key is contained in this ResourceBundle or its parent bundles.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#containsKey
     */
    public function containsKey($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the base name of this bundle, if known, or null if unknown.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getBaseBundleName
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getBundle
     */
    public static function static_getBundle($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of the keys.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getKeys
     */
    public function getKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the locale of this resource bundle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getLocale
     */
    public function getLocale($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets an object for the given key from this resource bundle or one of its parents.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getObject
     */
    public function getObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets a string for the given key from this resource bundle or one of its parents.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getString
     */
    public function getString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets a string array for the given key from this resource bundle or one of its parents.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getStringArray
     */
    public function getStringArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets an object for the given key from this resource bundle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleGetObject
     */
    protected function handleGetObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of the keys contained only in this ResourceBundle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleKeySet
     */
    protected function handleKeySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of all keys contained in this ResourceBundle and its parent bundles.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#keySet
     */
    public function keySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the parent bundle of this bundle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setParent
     */
    protected function setParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
