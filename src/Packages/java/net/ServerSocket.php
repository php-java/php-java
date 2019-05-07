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
class ServerSocket extends _Object /* implements Closeable, AutoCloseable, SocketOption, Set */
{

    /**
     * Listens for a connection to be made to this socket and accepts it.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#accept
     */
    public function accept($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Binds the ServerSocket to a specific address (IP address and port number).
     * Binds the ServerSocket to a specific address (IP address and port number).
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#bind
     */
    public function bind($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this socket.
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
     * Returns the unique ServerSocketChannel object associated with this socket, if any.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getChannel
     */
    public function getChannel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the local address of this server socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInetAddress
     */
    public function getInetAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the port number on which this socket is listening.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalPort
     */
    public function getLocalPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the address of the endpoint this socket is bound to.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalSocketAddress
     */
    public function getLocalSocketAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of a socket option.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOption
     */
    public function getOption($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the value of the SO_RCVBUF option for this ServerSocket, that is the proposed buffer size that will be used for Sockets accepted from this ServerSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReceiveBufferSize
     */
    public function getReceiveBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if SO_REUSEADDR is enabled.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReuseAddress
     */
    public function getReuseAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieve setting for SO_TIMEOUT. 0 returns implies that the option is disabled (i.e., timeout of infinity).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getSoTimeout
     */
    public function getSoTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Subclasses of ServerSocket use this method to override accept() to return their own subclass of socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#implAccept
     */
    public function implAccept($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the binding state of the ServerSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isBound
     */
    public function isBound($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the closed state of the ServerSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isClosed
     */
    public function isClosed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of a socket option.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setOption
     */
    public function setOption($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets performance preferences for this ServerSocket.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setPerformancePreferences
     */
    public function setPerformancePreferences($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets a default proposed value for the SO_RCVBUF option for sockets accepted from this ServerSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReceiveBufferSize
     */
    public function setReceiveBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable the SO_REUSEADDR socket option.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReuseAddress
     */
    public function setReuseAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the server socket implementation factory for the application.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setSocketFactory
     */
    public static function static_setSocketFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable SO_TIMEOUT with the specified timeout, in milliseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setSoTimeout
     */
    public function setSoTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of the socket options supported by this server socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportedOptions
     */
    public function supportedOptions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the implementation address and implementation port of this socket as a String.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
