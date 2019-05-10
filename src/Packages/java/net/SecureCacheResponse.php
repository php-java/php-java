<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\util\_List;
// use PHPJava\Packages\java\security\Principal;

/**
 * The `SecureCacheResponse` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\CacheResponse
 */
class SecureCacheResponse extends CacheResponse // implements _List, Principal
{
    /**
     * Returns the cipher suite in use on the original connection that retrieved the network resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getCipherSuite
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCipherSuite($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the certificate chain that were sent to the server during handshaking of the original connection that retrieved the network resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalCertificateChain
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocalCertificateChain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the principal that was sent to the server during handshaking in the original connection that retrieved the network resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalPrincipal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocalPrincipal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the server's principal which was established as part of defining the session during the original connection that retrieved the network resource.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPeerPrincipal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPeerPrincipal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the server's certificate chain, which was established as part of defining the session in the original connection that retrieved the network resource, from cache.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getServerCertificateChain
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getServerCertificateChain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
