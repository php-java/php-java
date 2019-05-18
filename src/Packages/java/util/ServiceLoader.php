<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\Iterable;
// use PHPJava\Packages\java\util\ServiceLoader\Provider;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `ServiceLoader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ServiceLoader extends _Object // implements Iterable, Provider, Stream
{
    /**
     * Load the first available service provider of this loader's service.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#findFirst
     */
    public function findFirst($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an iterator to lazily load and instantiate the available providers of this loader's service.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#iterator
     */
    public function iterator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new service loader for the given service type, using the current thread's context class loader.
     * Creates a new service loader for the given service.
     * Creates a new service loader for the given service type to load service providers from modules in the given module layer and its ancestors.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#load
     */
    public static function load($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new service loader for the given service type, using the platform class loader.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#loadInstalled
     */
    public static function loadInstalled($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Clear this loader's provider cache so that all providers will be reloaded.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#reload
     */
    public function reload($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream to lazily load available providers of this loader's service.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#stream
     */
    public function stream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string describing this service.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
