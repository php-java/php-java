<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

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
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccept
     */
    public function checkAccept($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to modify the thread argument.
     * Throws a SecurityException if the calling thread is not allowed to modify the thread group argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccess
     */
    public function checkAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to open a socket connection to the specified host and port number.
     * Throws a SecurityException if the specified security context is not allowed to open a socket connection to the specified host and port number.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkConnect
     */
    public function checkConnect($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to create a new class loader.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkCreateClassLoader
     */
    public function checkCreateClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to delete the specified file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkDelete
     */
    public function checkDelete($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to create a subprocess.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkExec
     */
    public function checkExec($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to cause the Java Virtual Machine to halt with the specified status code.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkExit
     */
    public function checkExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to dynamic link the library code specified by the string argument file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkLink
     */
    public function checkLink($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to wait for a connection request on the specified local port number.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkListen
     */
    public function checkListen($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to use (join/leave/send/receive) IP multicast.
     * Deprecated.Use #checkPermission(java.security.Permission) instead
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkMulticast
     */
    public function checkMulticast($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access the specified package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPackageAccess
     */
    public function checkPackageAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to define classes in the specified package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPackageDefinition
     */
    public function checkPackageDefinition($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the requested access, specified by the given permission, is not permitted based on the security policy currently in effect.
     * Throws a SecurityException if the specified security context is denied access to the resource specified by the given permission.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPermission
     */
    public function checkPermission($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to initiate a print job request.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPrintJobAccess
     */
    public function checkPrintJobAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access or modify the system properties.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPropertiesAccess
     */
    public function checkPropertiesAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to access the system property with the specified key name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkPropertyAccess
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
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkRead
     */
    public function checkRead($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines whether the permission with the specified permission target name should be granted or denied.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkSecurityAccess
     */
    public function checkSecurityAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to set the socket factory used by ServerSocket or Socket, or the stream handler factory used by URL.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkSetFactory
     */
    public function checkSetFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Throws a SecurityException if the calling thread is not allowed to write to the specified file descriptor.
     * Throws a SecurityException if the calling thread is not allowed to write to the file specified by the string argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkWrite
     */
    public function checkWrite($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current execution stack as an array of classes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassContext
     */
    public function getClassContext($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates an object that encapsulates the current execution environment.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSecurityContext
     */
    public function getSecurityContext($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the thread group into which to instantiate any new thread being created at the time this is being called.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getThreadGroup
     */
    public function getThreadGroup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
