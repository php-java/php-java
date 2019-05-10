<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `HttpURLConnection` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\URLConnection
 */
class HttpURLConnection extends URLConnection
{
    /**
     * The chunk-length when using chunked encoding streaming mode for output.
     *
     * @var mixed $chunkLength
     */
    protected $chunkLength;

    /**
     * The fixed content-length when using fixed-length streaming mode.
     *
     * @var mixed $fixedContentLength
     */
    protected $fixedContentLength;

    /**
     * The fixed content-length when using fixed-length streaming mode.
     *
     * @var mixed $fixedContentLengthLong
     */
    protected $fixedContentLengthLong;

    /**
     * HTTP Status-Code 202: Accepted.
     *
     * @var mixed $HTTP_ACCEPTED
     */
    public static $HTTP_ACCEPTED = null;

    /**
     * HTTP Status-Code 502: Bad Gateway.
     *
     * @var mixed $HTTP_BAD_GATEWAY
     */
    public static $HTTP_BAD_GATEWAY = null;

    /**
     * HTTP Status-Code 405: Method Not Allowed.
     *
     * @var mixed $HTTP_BAD_METHOD
     */
    public static $HTTP_BAD_METHOD = null;

    /**
     * HTTP Status-Code 400: Bad Request.
     *
     * @var mixed $HTTP_BAD_REQUEST
     */
    public static $HTTP_BAD_REQUEST = null;

    /**
     * HTTP Status-Code 408: Request Time-Out.
     *
     * @var mixed $HTTP_CLIENT_TIMEOUT
     */
    public static $HTTP_CLIENT_TIMEOUT = null;

    /**
     * HTTP Status-Code 409: Conflict.
     *
     * @var mixed $HTTP_CONFLICT
     */
    public static $HTTP_CONFLICT = null;

    /**
     * HTTP Status-Code 201: Created.
     *
     * @var mixed $HTTP_CREATED
     */
    public static $HTTP_CREATED = null;

    /**
     * HTTP Status-Code 413: Request Entity Too Large.
     *
     * @var mixed $HTTP_ENTITY_TOO_LARGE
     */
    public static $HTTP_ENTITY_TOO_LARGE = null;

    /**
     * HTTP Status-Code 403: Forbidden.
     *
     * @var mixed $HTTP_FORBIDDEN
     */
    public static $HTTP_FORBIDDEN = null;

    /**
     * HTTP Status-Code 504: Gateway Timeout.
     *
     * @var mixed $HTTP_GATEWAY_TIMEOUT
     */
    public static $HTTP_GATEWAY_TIMEOUT = null;

    /**
     * HTTP Status-Code 410: Gone.
     *
     * @var mixed $HTTP_GONE
     */
    public static $HTTP_GONE = null;

    /**
     * HTTP Status-Code 500: Internal Server Error.
     *
     * @var mixed $HTTP_INTERNAL_ERROR
     */
    public static $HTTP_INTERNAL_ERROR = null;

    /**
     * HTTP Status-Code 411: Length Required.
     *
     * @var mixed $HTTP_LENGTH_REQUIRED
     */
    public static $HTTP_LENGTH_REQUIRED = null;

    /**
     * HTTP Status-Code 301: Moved Permanently.
     *
     * @var mixed $HTTP_MOVED_PERM
     */
    public static $HTTP_MOVED_PERM = null;

    /**
     * HTTP Status-Code 302: Temporary Redirect.
     *
     * @var mixed $HTTP_MOVED_TEMP
     */
    public static $HTTP_MOVED_TEMP = null;

    /**
     * HTTP Status-Code 300: Multiple Choices.
     *
     * @var mixed $HTTP_MULT_CHOICE
     */
    public static $HTTP_MULT_CHOICE = null;

    /**
     * HTTP Status-Code 204: No Content.
     *
     * @var mixed $HTTP_NO_CONTENT
     */
    public static $HTTP_NO_CONTENT = null;

    /**
     * HTTP Status-Code 406: Not Acceptable.
     *
     * @var mixed $HTTP_NOT_ACCEPTABLE
     */
    public static $HTTP_NOT_ACCEPTABLE = null;

    /**
     * HTTP Status-Code 203: Non-Authoritative Information.
     *
     * @var mixed $HTTP_NOT_AUTHORITATIVE
     */
    public static $HTTP_NOT_AUTHORITATIVE = null;

    /**
     * HTTP Status-Code 404: Not Found.
     *
     * @var mixed $HTTP_NOT_FOUND
     */
    public static $HTTP_NOT_FOUND = null;

    /**
     * HTTP Status-Code 501: Not Implemented.
     *
     * @var mixed $HTTP_NOT_IMPLEMENTED
     */
    public static $HTTP_NOT_IMPLEMENTED = null;

    /**
     * HTTP Status-Code 304: Not Modified.
     *
     * @var mixed $HTTP_NOT_MODIFIED
     */
    public static $HTTP_NOT_MODIFIED = null;

    /**
     * HTTP Status-Code 200: OK.
     *
     * @var mixed $HTTP_OK
     */
    public static $HTTP_OK = null;

    /**
     * HTTP Status-Code 206: Partial Content.
     *
     * @var mixed $HTTP_PARTIAL
     */
    public static $HTTP_PARTIAL = null;

    /**
     * HTTP Status-Code 402: Payment Required.
     *
     * @var mixed $HTTP_PAYMENT_REQUIRED
     */
    public static $HTTP_PAYMENT_REQUIRED = null;

    /**
     * HTTP Status-Code 412: Precondition Failed.
     *
     * @var mixed $HTTP_PRECON_FAILED
     */
    public static $HTTP_PRECON_FAILED = null;

    /**
     * HTTP Status-Code 407: Proxy Authentication Required.
     *
     * @var mixed $HTTP_PROXY_AUTH
     */
    public static $HTTP_PROXY_AUTH = null;

    /**
     * HTTP Status-Code 414: Request-URI Too Large.
     *
     * @var mixed $HTTP_REQ_TOO_LONG
     */
    public static $HTTP_REQ_TOO_LONG = null;

    /**
     * HTTP Status-Code 205: Reset Content.
     *
     * @var mixed $HTTP_RESET
     */
    public static $HTTP_RESET = null;

    /**
     * HTTP Status-Code 303: See Other.
     *
     * @var mixed $HTTP_SEE_OTHER
     */
    public static $HTTP_SEE_OTHER = null;

    /**
     * Deprecated.it is misplaced and shouldn't have existed.
     *
     * @var mixed $HTTP_SERVER_ERROR
     */
    public static $HTTP_SERVER_ERROR = null;

    /**
     * HTTP Status-Code 401: Unauthorized.
     *
     * @var mixed $HTTP_UNAUTHORIZED
     */
    public static $HTTP_UNAUTHORIZED = null;

    /**
     * HTTP Status-Code 503: Service Unavailable.
     *
     * @var mixed $HTTP_UNAVAILABLE
     */
    public static $HTTP_UNAVAILABLE = null;

    /**
     * HTTP Status-Code 415: Unsupported Media Type.
     *
     * @var mixed $HTTP_UNSUPPORTED_TYPE
     */
    public static $HTTP_UNSUPPORTED_TYPE = null;

    /**
     * HTTP Status-Code 305: Use Proxy.
     *
     * @var mixed $HTTP_USE_PROXY
     */
    public static $HTTP_USE_PROXY = null;

    /**
     * HTTP Status-Code 505: HTTP Version Not Supported.
     *
     * @var mixed $HTTP_VERSION
     */
    public static $HTTP_VERSION = null;

    /**
     * If true, the protocol will automatically follow redirects.
     *
     * @var mixed $instanceFollowRedirects
     */
    protected $instanceFollowRedirects;

    /**
     * The HTTP method (GET,POST,PUT,etc.).
     *
     * @var mixed $method
     */
    protected $method;

    /**
     * An int representing the three digit HTTP Status-Code.
     *
     * @var mixed $responseCode
     */
    protected $responseCode;

    /**
     * The HTTP response message.
     *
     * @var mixed $responseMessage
     */
    protected $responseMessage;

    /**
     * Indicates that other requests to the server are unlikely in the near future.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#disconnect
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function disconnect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the error stream if the connection failed but the server sent useful data nonetheless.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getErrorStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getErrorStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a boolean indicating whether or not HTTP redirects (3xx) should be automatically followed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFollowRedirects
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getFollowRedirects($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value for the nth header field.
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
     * Returns the value of this HttpURLConnection's instanceFollowRedirects field.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInstanceFollowRedirects
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getInstanceFollowRedirects($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a SocketPermission object representing the permission necessary to connect to the destination host and port.
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
     * Get the request method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getRequestMethod
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getRequestMethod($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the status code from an HTTP response message.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getResponseCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResponseCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the HTTP response message, if any, returned along with the response code from a server.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getResponseMessage
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResponseMessage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Supplies an Authenticator to be used when authentication is requested through the HTTP protocol for this HttpURLConnection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setAuthenticator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setAuthenticator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method is used to enable streaming of a HTTP request body without internal buffering, when the content length is not known in advance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setChunkedStreamingMode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setChunkedStreamingMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method is used to enable streaming of a HTTP request body without internal buffering, when the content length is known in advance.
     * This method is used to enable streaming of a HTTP request body without internal buffering, when the content length is known in advance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setFixedLengthStreamingMode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setFixedLengthStreamingMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets whether HTTP redirects  (requests with response code 3xx) should be automatically followed by this class.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setFollowRedirects
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setFollowRedirects($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets whether HTTP redirects (requests with response code 3xx) should be automatically followed by this HttpURLConnection instance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setInstanceFollowRedirects
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setInstanceFollowRedirects($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the method for the URL request, one of:   GET  POST  HEAD  OPTIONS  PUT  DELETE  TRACE  are legal, subject to protocol restrictions.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setRequestMethod
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setRequestMethod($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates if the connection is going through a proxy.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#usingProxy
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function usingProxy($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
