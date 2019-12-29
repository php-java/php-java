<?php
declare(strict_types=1);
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
class URLConnection extends _Object // implements ContentHandlerFactory, _List
{
    /**
     * If true, this URL is being examined in a context in which it makes sense to allow user interactions such as popping up an authentication dialog.
     *
     * @var mixed $allowUserInteraction
     */
    protected $allowUserInteraction;

    /**
     * If false, this connection object has not created a communications link to the specified URL.
     *
     * @var mixed $connected
     */
    protected $connected;

    /**
     * This variable is set by the setDoInput method.
     *
     * @var mixed $doInput
     */
    protected $doInput;

    /**
     * This variable is set by the setDoOutput method.
     *
     * @var mixed $doOutput
     */
    protected $doOutput;

    /**
     * Some protocols support skipping the fetching of the object unless the object has been modified more recently than a certain time.
     *
     * @var mixed $ifModifiedSince
     */
    protected $ifModifiedSince;

    /**
     * The URL represents the remote object on the World Wide Web to which this connection is opened.
     *
     * @var mixed $url
     */
    protected $url;

    /**
     * If true, the protocol is allowed to use caching whenever it can.
     *
     * @var mixed $useCaches
     */
    protected $useCaches;

    /**
     * Adds a general request property specified by a key-value pair.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#addRequestProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function addRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Opens a communications link to the resource referenced by this URL, if such a connection has not already been established.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function connect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the allowUserInteraction field for this object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAllowUserInteraction
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns setting for connect timeout.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getConnectTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getConnectTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the contents of this URL connection.
     * Retrieves the contents of this URL connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContent
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-encoding header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentEncoding
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContentEncoding($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-length header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentLength
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContentLength($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-length header field as a long.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentLengthLong
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContentLengthLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the content-type header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getContentType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContentType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the date header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDate
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default value of the allowUserInteraction field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultAllowUserInteraction
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefaultAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.The instance specific getRequestProperty method should be used after an appropriate instance of URLConnection is obtained.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultRequestProperty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefaultRequestProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default value of a URLConnection's useCaches flag.
     * Returns the default value of the useCaches flag for the given protocol.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefaultUseCaches
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefaultUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's doInput flag.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDoInput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDoInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's doOutput flag.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDoOutput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDoOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the expires header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getExpiration
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getExpiration($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads filename map (a mimetable) from a data file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileNameMap
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getFileNameMap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value for the nth header field.
     * Returns the value of the named header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderField
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getHeaderField($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as date.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldDate
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getHeaderFieldDate($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as a number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldInt
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getHeaderFieldInt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the key for the nth header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldKey
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getHeaderFieldKey($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named field parsed as a number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFieldLong
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function getHeaderFieldLong($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable Map of the header fields.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHeaderFields
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getHeaderFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this object's ifModifiedSince field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getIfModifiedSince
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getIfModifiedSince($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream that reads from this open connection.
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
     * Returns the value of the last-modified header field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLastModified
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an output stream that writes to this connection.
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
     * Returns a permission object representing the permission necessary to make the connection represented by this object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getPermission
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPermission($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns setting for read timeout. 0 return implies that the option is disabled (i.e., timeout of infinity).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getReadTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getReadTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable Map of general request properties for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRequestProperties
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getRequestProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the named general request property for this connection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRequestProperty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getRequestProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's URL field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getURL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this URLConnection's useCaches field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getUseCaches
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tries to determine the content type of an object, based on the specified "file" component of a URL.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#guessContentTypeFromName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_guessContentTypeFromName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tries to determine the type of an input stream based on the characters at the beginning of the input stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#guessContentTypeFromStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_guessContentTypeFromStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the value of the allowUserInteraction field of this URLConnection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setAllowUserInteraction
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets a specified timeout value, in milliseconds, to be used when opening a communications link to the resource referenced by this URLConnection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setConnectTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setConnectTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the ContentHandlerFactory of an application.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setContentHandlerFactory
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setContentHandlerFactory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default value of the allowUserInteraction field for all future URLConnection objects to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultAllowUserInteraction
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setDefaultAllowUserInteraction($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.The instance specific setRequestProperty method should be used after an appropriate instance of URLConnection is obtained.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultRequestProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_setDefaultRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the default value of the useCaches field to the specified value.
     * Sets the default value of the useCaches field for the named protocol to the given value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefaultUseCaches
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_setDefaultUseCaches($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the doInput field for this URLConnection to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDoInput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setDoInput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the doOutput field for this URLConnection to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDoOutput
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setDoOutput($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the FileNameMap.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setFileNameMap
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setFileNameMap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the ifModifiedSince field of this URLConnection to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setIfModifiedSince
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setIfModifiedSince($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the read timeout to a specified timeout, in milliseconds.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setReadTimeout
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setReadTimeout($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the general request property.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setRequestProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setRequestProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the value of the useCaches field of this URLConnection to the specified value.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setUseCaches
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setUseCaches($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String representation of this URL connection.
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
