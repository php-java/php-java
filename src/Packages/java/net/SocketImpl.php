<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `SocketImpl` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class SocketImpl extends _Object /* implements SocketOption, Set */
{
    /**
     * The IP address of the remote end of this socket.
     *
     * @var mixed $address
     */
    protected $address = null;

    /**
     * The file descriptor object for this socket.
     *
     * @var mixed $fd
     */
    protected $fd = null;

    /**
     * The local port number to which this socket is connected.
     *
     * @var mixed $localport
     */
    protected $localport = null;

    /**
     * The port number on the remote host to which this socket is connected.
     *
     * @var mixed $port
     */
    protected $port = null;


    /**
     * Accepts a connection.
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
     * Returns the number of bytes that can be read from this socket without blocking.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#available
     */
    public function available($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Binds this socket to the specified local IP address and port number.
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
     * Connects this socket to the specified port on the named host.
     * Connects this socket to the specified port number on the specified host.
     * Connects this socket to the specified port number on the specified host.
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
     * Creates either a stream or a datagram socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#create
     */
    public function create($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's fd field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileDescriptor
     */
    public function getFileDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's address field.
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
     * Returns an input stream for this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInputStream
     */
    public function getInputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's localport field.
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
     * Called to get a socket option.
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
     * Returns an output stream for this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOutputStream
     */
    public function getOutputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this socket's port field.
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
     * Sets the maximum queue length for incoming connection indications (a request to connect) to the count argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#listen
     */
    public function listen($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Send one byte of urgent data on the socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#sendUrgentData
     */
    public function sendUrgentData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to set a socket option.
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
     * Sets performance preferences for this socket.
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
     * Places the input stream for this socket at "end of stream".
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#shutdownInput
     */
    public function shutdownInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disables the output stream for this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#shutdownOutput
     */
    public function shutdownOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of SocketOptions supported by this impl and by this impl's socket (Socket or ServerSocket)
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
     * Returns whether or not this SocketImpl supports sending urgent data.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportsUrgentData
     */
    public function supportsUrgentData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the address and port of this socket as a String.
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
