<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `LambdaMetafactory` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class LambdaMetafactory extends _Object
{
    /**
     * Flag for alternate metafactories indicating the lambda object requires additional bridge methods
     *
     * @var mixed $FLAG_BRIDGES
     */
    public static $FLAG_BRIDGES = null;

    /**
     * Flag for alternate metafactories indicating the lambda object implements other marker interfaces besides Serializable
     *
     * @var mixed $FLAG_MARKERS
     */
    public static $FLAG_MARKERS = null;

    /**
     * Flag for alternate metafactories indicating the lambda object must be serializable
     *
     * @var mixed $FLAG_SERIALIZABLE
     */
    public static $FLAG_SERIALIZABLE = null;


    /**
     * Facilitates the creation of simple "function objects" that implement one or more interfaces by delegation to a provided MethodHandle, after appropriate type adaptation and partial evaluation of arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#altMetafactory
     */
    public static function altMetafactory($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Facilitates the creation of simple "function objects" that implement one or more interfaces by delegation to a provided MethodHandle, after appropriate type adaptation and partial evaluation of arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#metafactory
     */
    public static function metafactory($a = null, $b = null, $c = null, $d = null, $e = null, $f = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
