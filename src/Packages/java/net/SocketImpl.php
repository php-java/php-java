<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `SocketImpl` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class SocketImpl extends Object_ // implements SocketOption, Set
{
    /**
     * The IP address of the remote end of this socket.
     *
     * @var mixed $address
     */
    protected $address;

    /**
     * The file descriptor object for this socket.
     *
     * @var mixed $fd
     */
    protected $fd;

    /**
     * The local port number to which this socket is connected.
     *
     * @var mixed $localport
     */
    protected $localport;

    /**
     * The port number on the remote host to which this socket is connected.
     *
     * @var mixed $port
     */
    protected $port;

    /**
     * Accepts a connection.
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
     * Returns the number of bytes that can be read from this socket without blocking.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#available
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function available($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Binds this socket to the specified local IP address and port number.
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
     * Connects this socket to the specified port on the named host.
     * Connects this socket to the specified port number on the specified host.
     * Connects this socket to the specified port number on the specified host.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function connect($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates either a stream or a datagram socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#create
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function create($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's fd field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileDescriptor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFileDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's address field.
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
     * Returns an input stream for this socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getInputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's localport field.
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
     * Called to get a socket option.
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
     * Returns an output stream for this socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOutputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getOutputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's port field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the maximum queue length for incoming connection indications (a request to connect) to the count argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#listen
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function listen($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Send one byte of urgent data on the socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#sendUrgentData
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function sendUrgentData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to set a socket option.
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
     * Sets performance preferences for this socket.
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
     * Places the input stream for this socket at "end of stream".
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#shutdownInput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function shutdownInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disables the output stream for this socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#shutdownOutput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function shutdownOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of SocketOptions supported by this impl and by this impl's socket (Socket or ServerSocket).
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
     * Returns whether or not this SocketImpl supports sending urgent data.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportsUrgentData
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function supportsUrgentData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the address and port of this socket as a String.
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
