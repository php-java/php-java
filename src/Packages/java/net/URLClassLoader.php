<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\SecureClassLoader;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;
// use PHPJava\Packages\java\net\URLStreamHandlerFactory;
// use PHPJava\Packages\java\util\Enumeration;

/**
 * The `URLClassLoader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\ClassLoader
 * @parent \PHPJava\Packages\java\security\SecureClassLoader
 */
class URLClassLoader extends SecureClassLoader /* implements Closeable, AutoCloseable, URLStreamHandlerFactory, Enumeration */
{

    /**
     * Appends the specified URL to the list of URLs to search for classes and resources.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#addURL
     */
    public function addURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this URLClassLoader, so that it can no longer be used to load new classes or resources that are defined by this loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#close
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Defines a new package by name in this URLClassLoader.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#definePackage
     */
    public function definePackage($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds and loads the class with the specified name from the URL search path.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findClass
     */
    public function findClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the specified name on the URL search path.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findResource
     */
    public function findResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Enumeration of URLs representing all of the resources on the URL search path having the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findResources
     */
    public function findResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the permissions for the given codesource object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPermissions
     */
    public function getPermissions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading the specified resource.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getResourceAsStream
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the search path of URLs for loading classes and resources.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getURLs
     */
    public function getURLs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new instance of URLClassLoader for the specified URLs and default parent class loader.
     * Creates a new instance of URLClassLoader for the specified URLs and parent class loader.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#newInstance
     */
    public static function static_newInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
