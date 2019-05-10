<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;
// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `ServerSocket` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ServerSocket extends _Object // implements Closeable, AutoCloseable, SocketOption, Set
{
    /**
     * Listens for a connection to be made to this socket and accepts it.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#accept
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function accept($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Binds the ServerSocket to a specific address (IP address and port number).
     * Binds the ServerSocket to a specific address (IP address and port number).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#bind
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function bind($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this socket.
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
     * Returns the unique ServerSocketChannel object associated with this socket, if any.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getChannel
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getChannel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the local address of this server socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInetAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getInetAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the port number on which this socket is listening.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalPort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocalPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the address of the endpoint this socket is bound to.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalSocketAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocalSocketAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a socket option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOption
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getOption($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the value of the SO_RCVBUF option for this ServerSocket, that is the proposed buffer size that will be used for Sockets accepted from this ServerSocket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReceiveBufferSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getReceiveBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if SO_REUSEADDR is enabled.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReuseAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getReuseAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieve setting for SO_TIMEOUT. 0 returns implies that the option is disabled (i.e., timeout of infinity).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getSoTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSoTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Subclasses of ServerSocket use this method to override accept() to return their own subclass of socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#implAccept
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function implAccept($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the binding state of the ServerSocket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isBound
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isBound($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the closed state of the ServerSocket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isClosed
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isClosed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a socket option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setOption
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setOption($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets performance preferences for this ServerSocket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setPerformancePreferences
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function setPerformancePreferences($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets a default proposed value for the SO_RCVBUF option for sockets accepted from this ServerSocket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReceiveBufferSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setReceiveBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable the SO_REUSEADDR socket option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReuseAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setReuseAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the server socket implementation factory for the application.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setSocketFactory
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setSocketFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable SO_TIMEOUT with the specified timeout, in milliseconds.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setSoTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setSoTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of the socket options supported by this server socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportedOptions
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function supportedOptions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the implementation address and implementation port of this socket as a String.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
