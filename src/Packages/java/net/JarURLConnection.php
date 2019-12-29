<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `JarURLConnection` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\URLConnection
 */
class JarURLConnection extends URLConnection
{
    /**
     * The connection to the JAR file URL, if the connection has been initiated.
     *
     * @var mixed $jarFileURLConnection
     */
    protected $jarFileURLConnection;

    /**
     * Return the Attributes object for this connection if the URL for it points to a JAR file entry, null otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAttributes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAttributes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the Certificate object for this connection if the URL for it points to a JAR file entry, null otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getCertificates
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCertificates($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the entry name for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getEntryName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getEntryName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the JAR entry object for this connection, if any.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getJarEntry
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getJarEntry($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the JAR file for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getJarFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getJarFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the URL for the Jar file for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getJarFileURL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getJarFileURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the main Attributes for the JAR file for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getMainAttributes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getMainAttributes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the Manifest for this connection, or null if none.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getManifest
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getManifest($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
