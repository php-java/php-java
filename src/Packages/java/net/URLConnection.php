<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\net\ContentHandlerFactory;
// use PHPJava\Packages\java\util\_List;

/**
 * The `URLConnection` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class URLConnection extends _Object /* implements ContentHandlerFactory, _List */
{
    /**
     * If true, this URL is being examined in a context in which it makes sense to allow user interactions such as popping up an authentication dialog.
     *
     * @var mixed $allowUserInteraction
     */
    protected $allowUserInteraction = null;

    /**
     * If false, this connection object has not created a communications link to the specified URL.
     *
     * @var mixed $connected
     */
    protected $connected = null;

    /**
     * This variable is set by the setDoInput method.
     *
     * @var mixed $doInput
     */
    protected $doInput = null;

    /**
     * This variable is set by the setDoOutput method.
     *
     * @var mixed $doOutput
     */
    protected $doOutput = null;

    /**
     * Some protocols support skipping the fetching of the object unless the object has been modified more recently than a certain time.
     *
     * @var mixed $ifModifiedSince
     */
    protected $ifModifiedSince = null;

    /**
     * The URL represents the remote object on the World Wide Web to which this connection is opened.
     *
     * @var mixed $url
     */
    protected $url = null;

    /**
     * If true, the protocol is allowed to use caching whenever it can.
     *
     * @var mixed $useCaches
     */
    protected $useCaches = null;


    /**
     * Adds a general request property specified by a key-value pair.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#addRequestProperty
     */
    public function addRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Opens a communications link to the resource referenced by this URL, if such a connection has not already been established.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     */
    public function connect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the allowUserInteraction field for this object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAllowUserInteraction
     */
    public function getAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns setting for connect timeout.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getConnectTimeout
     */
    public function getConnectTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the contents of this URL connection.
     * Retrieves the contents of this URL connection.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContent
     */
    public function getContent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-encoding header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentEncoding
     */
    public function getContentEncoding($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-length header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentLength
     */
    public function getContentLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-length header field as a long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentLengthLong
     */
    public function getContentLengthLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-type header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentType
     */
    public function getContentType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the date header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDate
     */
    public function getDate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default value of the allowUserInteraction field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultAllowUserInteraction
     */
    public static function static_getDefaultAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.The instance specific getRequestProperty method should be used after an appropriate instance of URLConnection is obtained.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultRequestProperty
     */
    public static function static_getDefaultRequestProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default value of a URLConnection's useCaches flag.
     * Returns the default value of the useCaches flag for the given protocol.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultUseCaches
     */
    public static function static_getDefaultUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's doInput flag.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDoInput
     */
    public function getDoInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's doOutput flag.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDoOutput
     */
    public function getDoOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the expires header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getExpiration
     */
    public function getExpiration($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads filename map (a mimetable) from a data file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileNameMap
     */
    public static function static_getFileNameMap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value for the nth header field.
     * Returns the value of the named header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderField
     */
    public function getHeaderField($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as date.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldDate
     */
    public function getHeaderFieldDate($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as a number.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldInt
     */
    public function getHeaderFieldInt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the key for the nth header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldKey
     */
    public function getHeaderFieldKey($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as a number.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldLong
     */
    public function getHeaderFieldLong($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable Map of the header fields.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFields
     */
    public function getHeaderFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this object's ifModifiedSince field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getIfModifiedSince
     */
    public function getIfModifiedSince($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream that reads from this open connection.
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
     * Returns the value of the last-modified header field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLastModified
     */
    public function getLastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an output stream that writes to this connection.
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
     * Returns a permission object representing the permission necessary to make the connection represented by this object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPermission
     */
    public function getPermission($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns setting for read timeout. 0 return implies that the option is disabled (i.e., timeout of infinity).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReadTimeout
     */
    public function getReadTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable Map of general request properties for this connection.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRequestProperties
     */
    public function getRequestProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named general request property for this connection.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRequestProperty
     */
    public function getRequestProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's URL field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getURL
     */
    public function getURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's useCaches field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getUseCaches
     */
    public function getUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tries to determine the content type of an object, based on the specified "file" component of a URL.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#guessContentTypeFromName
     */
    public static function static_guessContentTypeFromName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tries to determine the type of an input stream based on the characters at the beginning of the input stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#guessContentTypeFromStream
     */
    public static function static_guessContentTypeFromStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the value of the allowUserInteraction field of this URLConnection.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setAllowUserInteraction
     */
    public function setAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets a specified timeout value, in milliseconds, to be used when opening a communications link to the resource referenced by this URLConnection.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setConnectTimeout
     */
    public function setConnectTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the ContentHandlerFactory of an application.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setContentHandlerFactory
     */
    public static function static_setContentHandlerFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default value of the allowUserInteraction field for all future URLConnection objects to the specified value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultAllowUserInteraction
     */
    public static function static_setDefaultAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.The instance specific setRequestProperty method should be used after an appropriate instance of URLConnection is obtained.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultRequestProperty
     */
    public static function static_setDefaultRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default value of the useCaches field to the specified value.
     * Sets the default value of the useCaches field for the named protocol to the given value.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultUseCaches
     */
    public static function static_setDefaultUseCaches($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the doInput field for this URLConnection to the specified value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDoInput
     */
    public function setDoInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the doOutput field for this URLConnection to the specified value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDoOutput
     */
    public function setDoOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the FileNameMap.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setFileNameMap
     */
    public static function static_setFileNameMap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the ifModifiedSince field of this URLConnection to the specified value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setIfModifiedSince
     */
    public function setIfModifiedSince($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the read timeout to a specified timeout, in milliseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReadTimeout
     */
    public function setReadTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the general request property.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setRequestProperty
     */
    public function setRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the useCaches field of this URLConnection to the specified value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setUseCaches
     */
    public function setUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String representation of this URL connection.
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
