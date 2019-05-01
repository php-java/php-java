<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\Enumeration;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `ClassLoader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ClassLoader extends _Object /* implements Enumeration, Stream */
{

    /**
     * Sets the default assertion status for this class loader to false and discards any package defaults or class assertion status settings associated with the class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#clearAssertionStatus
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#defineClass
     */
    public function defineClass($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Defines a package by name in this ClassLoader.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @param mixed $g
     * @param mixed $h
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#definePackage
     */
    public function definePackage($a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the class with the specified binary name.
     * Finds the class with the given binary name in a module defined to this class loader.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findClass
     */
    public function findClass($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute path name of a native library.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findLibrary
     */
    public function findLibrary($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the class with the given binary name if this loader has been recorded by the Java virtual machine as an initiating loader of a class with that binary name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findLoadedClass
     */
    public function findLoadedClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the given name.
     * Returns a URL to a resource in a module defined to this class loader.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findResource
     */
    public function findResource($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of URL objects representing all the resources with the given name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findResources
     */
    public function findResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds a class with the specified binary name, loading it if necessary.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findSystemClass
     */
    public function findSystemClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the lock object for class loading operations.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassLoadingLock
     */
    public function getClassLoadingLock($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Package of the given name that has been defined by this class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefinedPackage
     */
    public function getDefinedPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages that have been defined by this class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefinedPackages
     */
    public function getDefinedPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of this class loader or null if this class loader is not named.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.If multiple class loaders delegate to each other and define classes with the same package name, and one such loader relies on the lookup behavior of getPackage to return a Package from a parent loader, then the properties exposed by the Package may not be as expected in the rest of the program.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackage
     */
    public function getPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages that have been defined by this class loader and its ancestors.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     */
    public function getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the parent class loader for delegation.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getParent
     */
    public function getParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the platform class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPlatformClassLoader
     */
    public static function static_getPlatformClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds the resource with the given name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResource
     */
    public function getResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading the specified resource.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResourceAsStream
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds all the resources with the given name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResources
     */
    public function getResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the system class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemClassLoader
     */
    public static function static_getSystemClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Find a resource of the specified name from the search path used to load classes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResource
     */
    public static function static_getSystemResource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Open for reading, a resource of the specified name from the search path used to load classes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResourceAsStream
     */
    public static function static_getSystemResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Finds all resources of the specified name from the search path used to load classes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSystemResources
     */
    public static function static_getSystemResources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unnamed Module for this class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getUnnamedModule
     */
    public function getUnnamedModule($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this class loader is registered as parallel capable, otherwise false.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isRegisteredAsParallelCapable
     */
    public function isRegisteredAsParallelCapable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the class with the specified binary name.
     * Loads the class with the specified binary name.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#loadClass
     */
    public function loadClass($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Registers the caller as parallel capable.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#registerAsParallelCapable
     */
    public static function static_registerAsParallelCapable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Links the specified class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resolveClass
     */
    public function resolveClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a stream whose elements are the URLs of all the resources with the given name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resources
     */
    public function resources($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the desired assertion status for the named top-level class in this class loader and any nested classes contained therein.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setClassAssertionStatus
     */
    public function setClassAssertionStatus($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default assertion status for this class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDefaultAssertionStatus
     */
    public function setDefaultAssertionStatus($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the package default assertion status for the named package.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setPackageAssertionStatus
     */
    public function setPackageAssertionStatus($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the signers of a class.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setSigners
     */
    public function setSigners($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
