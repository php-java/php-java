<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\net\CookieStore;

/**
 * The `CookieManager` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\CookieHandler
 */
class CookieManager extends CookieHandler // implements CookieStore
{
    /**
     * To retrieve current cookie store.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getCookieStore
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCookieStore($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * To set the cookie policy of this cookie manager.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setCookiePolicy
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setCookiePolicy($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
