<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `SecurityManager` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class SecurityManager extends _Object
{
    /**
     * Throws a SecurityException if the calling thread is not permitted to accept a socket connection from the specified host and port number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccept
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function checkAccept($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to modify the thread argument.
     * Throws a SecurityException if the calling thread is not allowed to modify the thread group argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to open a socket connection to the specified host and port number.
     * Throws a SecurityException if the specified security context is not allowed to open a socket connection to the specified host and port number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkConnect
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function checkConnect($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to create a new class loader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkCreateClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkCreateClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to delete the specified file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkDelete
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkDelete($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to create a subprocess.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkExec
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkExec($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to cause the Java Virtual Machine to halt with the specified status code.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkExit
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to dynamic link the library code specified by the string argument file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkLink
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkLink($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to wait for a connection request on the specified local port number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkListen
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkListen($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to use (join/leave/send/receive) IP multicast.
     * Deprecated.Use #checkPermission(java.security.Permission) instead.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkMulticast
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function checkMulticast($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access the specified package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPackageAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkPackageAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to define classes in the specified package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPackageDefinition
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkPackageDefinition($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the requested access, specified by the given permission, is not permitted based on the security policy currently in effect.
     * Throws a SecurityException if the specified security context is denied access to the resource specified by the given permission.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPermission
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function checkPermission($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to initiate a print job request.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPrintJobAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkPrintJobAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access or modify the system properties.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPropertiesAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkPropertiesAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access the system property with the specified key name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPropertyAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkPropertyAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to read from the specified file descriptor.
     * Throws a SecurityException if the calling thread is not allowed to read the file specified by the string argument.
     * Throws a SecurityException if the specified security context is not allowed to read the file specified by the string argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkRead
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function checkRead($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the permission with the specified permission target name should be granted or denied.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkSecurityAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkSecurityAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to set the socket factory used by ServerSocket or Socket, or the stream handler factory used by URL.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkSetFactory
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkSetFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to write to the specified file descriptor.
     * Throws a SecurityException if the calling thread is not allowed to write to the file specified by the string argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkWrite
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkWrite($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current execution stack as an array of classes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassContext
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getClassContext($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates an object that encapsulates the current execution environment.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSecurityContext
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSecurityContext($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the thread group into which to instantiate any new thread being created at the time this is being called.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getThreadGroup
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getThreadGroup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
