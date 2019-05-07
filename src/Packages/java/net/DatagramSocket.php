<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;
// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `DatagramSocket` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class DatagramSocket extends _Object /* implements Closeable, AutoCloseable, SocketOption, Set */
{

    /**
     * Binds this DatagramSocket to a specific address and port.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#bind
     */
    public function bind($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this datagram socket.
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
     * Connects the socket to a remote address for this socket.
     * Connects this socket to a remote socket address (IP address + port number).
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     */
    public function connect($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disconnects the socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#disconnect
     */
    public function disconnect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if SO_BROADCAST is enabled.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getBroadcast
     */
    public function getBroadcast($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unique DatagramChannel object associated with this datagram socket, if any.
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
     * Returns the address to which this socket is connected.
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
     * Gets the local address to which the socket is bound.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalAddress
     */
    public function getLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the port number on the local host to which this socket is bound.
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
     * Returns the port number to which this socket is connected.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPort
     */
    public function getPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get value of the SO_RCVBUF option for this DatagramSocket, that is the buffer size used by the platform for input on this DatagramSocket.
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
     * Returns the address of the endpoint this socket is connected to, or null if it is unconnected.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRemoteSocketAddress
     */
    public function getRemoteSocketAddress($a = null)
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
     * Get value of the SO_SNDBUF option for this DatagramSocket, that is the buffer size used by the platform for output on this DatagramSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getSendBufferSize
     */
    public function getSendBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieve setting for SO_TIMEOUT.  0 returns implies that the option is disabled (i.e., timeout of infinity).
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
     * Gets traffic class or type-of-service in the IP datagram header for packets sent from this DatagramSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getTrafficClass
     */
    public function getTrafficClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the binding state of the socket.
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
     * Returns whether the socket is closed or not.
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
     * Returns the connection state of the socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isConnected
     */
    public function isConnected($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Receives a datagram packet from this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#receive
     */
    public function receive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sends a datagram packet from this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#send
     */
    public function send($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable SO_BROADCAST.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setBroadcast
     */
    public function setBroadcast($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the datagram socket implementation factory for the application.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDatagramSocketImplFactory
     */
    public static function static_setDatagramSocketImplFactory($a = null)
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
     * Sets the SO_RCVBUF option to the specified value for this DatagramSocket.
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
     * Sets the SO_SNDBUF option to the specified value for this DatagramSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setSendBufferSize
     */
    public function setSendBufferSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enable/disable SO_TIMEOUT with the specified timeout, in  milliseconds.
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
     * Sets traffic class or type-of-service octet in the IP datagram header for datagrams sent from this DatagramSocket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setTrafficClass
     */
    public function setTrafficClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of the socket options supported by this socket.
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
}
