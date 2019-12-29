<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\util\Enumeration;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `ClassLoader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ClassLoader extends _Object // implements Enumeration, Stream
{
    /**
     * Sets the default assertion status for this class loader to false and discards any package defaults or class assertion status settings associated with the class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#clearAssertionStatus
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function clearAssertionStatus($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Replaced by defineClass(String, byte[], int, int)
     * Converts an array of bytes into an instance of class Class.
     * Converts an array of bytes into an instance of class Class, with a given ProtectionDomain.
     * Converts a ByteBuffer into an instance of class Class, with the given ProtectionDomain.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#defineClass
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public function defineClass($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Defines a package by name in this ClassLoader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#definePackage
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @param null|mixed $f
     * @param null|mixed $g
     * @param null|mixed $h
     * @throws NotImplementedException
     */
    public function definePackage($a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the class with the specified binary name.
     * Finds the class with the given binary name in a module defined to this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findClass
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function findClass($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute path name of a native library.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findLibrary
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findLibrary($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the class with the given binary name if this loader has been recorded by the Java virtual machine as an initiating loader of a class with that binary name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findLoadedClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findLoadedClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the given name.
     * Returns a URL to a resource in a module defined to this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findResource
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function findResource($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of URL objects representing all the resources with the given name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findResources
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds a class with the specified binary name, loading it if necessary.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findSystemClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function findSystemClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the lock object for class loading operations.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassLoadingLock
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getClassLoadingLock($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Package of the given name that has been defined by this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefinedPackage
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDefinedPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages that have been defined by this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefinedPackages
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDefinedPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of this class loader or null if this class loader is not named.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.If multiple class loaders delegate to each other and define classes with the same package name, and one such loader relies on the lookup behavior of getPackage to return a Package from a parent loader, then the properties exposed by the Package may not be as expected in the rest of the program.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackage
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages that have been defined by this class loader and its ancestors.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the parent class loader for delegation.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getParent
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the platform class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPlatformClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getPlatformClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the given name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResource
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading the specified resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResourceAsStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds all the resources with the given name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResources
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the system class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getSystemClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Find a resource of the specified name from the search path used to load classes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResource
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getSystemResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Open for reading, a resource of the specified name from the search path used to load classes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResourceAsStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getSystemResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds all resources of the specified name from the search path used to load classes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResources
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getSystemResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unnamed Module for this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getUnnamedModule
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getUnnamedModule($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this class loader is registered as parallel capable, otherwise false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isRegisteredAsParallelCapable
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isRegisteredAsParallelCapable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the class with the specified binary name.
     * Loads the class with the specified binary name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#loadClass
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function loadClass($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Registers the caller as parallel capable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#registerAsParallelCapable
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_registerAsParallelCapable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Links the specified class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resolveClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function resolveClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream whose elements are the URLs of all the resources with the given name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resources
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function resources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the desired assertion status for the named top-level class in this class loader and any nested classes contained therein.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setClassAssertionStatus
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setClassAssertionStatus($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default assertion status for this class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDefaultAssertionStatus
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setDefaultAssertionStatus($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the package default assertion status for the named package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setPackageAssertionStatus
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setPackageAssertionStatus($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the signers of a class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setSigners
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setSigners($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
