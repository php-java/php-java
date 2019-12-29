<?php
declare(strict_types=1);
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
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\ClassLoader
 * @parent \PHPJava\Packages\java\security\SecureClassLoader
 */
class URLClassLoader extends SecureClassLoader // implements Closeable, AutoCloseable, URLStreamHandlerFactory, Enumeration
{
    /**
     * Appends the specified URL to the list of URLs to search for classes and resources.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#addURL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this URLClassLoader, so that it can no longer be used to load new classes or resources that are defined by this loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#close
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Defines a new package by name in this URLClassLoader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#definePackage
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function definePackage($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds and loads the class with the specified name from the URL search path.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the specified name on the URL search path.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findResource
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Enumeration of URLs representing all of the resources on the URL search path having the specified name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#findResources
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the permissions for the given codesource object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPermissions
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPermissions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading the specified resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getResourceAsStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the search path of URLs for loading classes and resources.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getURLs
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getURLs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new instance of URLClassLoader for the specified URLs and default parent class loader.
     * Creates a new instance of URLClassLoader for the specified URLs and parent class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#newInstance
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_newInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
