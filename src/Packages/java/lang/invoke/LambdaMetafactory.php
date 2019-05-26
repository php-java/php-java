<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Internal\Lambda;
use PHPJava\Kernel\Structures\_MethodHandle;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;

/**
 * The `LambdaMetafactory` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class LambdaMetafactory extends _Object
{
    /**
     * Flag for alternate metafactories indicating the lambda object requires additional bridge methods.
     *
     * @var mixed $FLAG_BRIDGES
     */
    public static $FLAG_BRIDGES = null;

    /**
     * Flag for alternate metafactories indicating the lambda object implements other marker interfaces besides Serializable.
     *
     * @var mixed $FLAG_MARKERS
     */
    public static $FLAG_MARKERS = null;

    /**
     * Flag for alternate metafactories indicating the lambda object must be serializable.
     *
     * @var mixed $FLAG_SERIALIZABLE
     */
    public static $FLAG_SERIALIZABLE = null;

    /**
     * Facilitates the creation of simple "function objects" that implement one or more interfaces by delegation to a provided MethodHandle, after appropriate type adaptation and partial evaluation of arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#altMetafactory
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public static function altMetafactory($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Facilitates the creation of simple "function objects" that implement one or more interfaces by delegation to a provided MethodHandle, after appropriate type adaptation and partial evaluation of arguments.
     *
     * @native JavaClass
     * @native ConstantPool
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#metafactory
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @param null|mixed $f
     * @throws NotImplementedException
     */
    public static function metafactory(
        JavaClass $javaClass,
        ConstantPool $cp,
        $a = null,
        $b = null,
        $c = null,
        $d = null,
        $e = null,
        $f = null
    ) {
        /**
         * @var Lookup $a
         * @var string $invokedName
         * @var MethodType $invokedType
         * @var MethodType $samMethodType
         * @var _MethodHandle $implMethod
         * @var MethodType $instantiatedMethodType
         */
        $caller = $a;
        $invokedName = $b;
        $invokedType = $c;
        $samMethodType = $d;
        $implMethod = $e;
        $instantiatedMethodType = $f;

        $class = $invokedType->returnType();

        $lambdaInfo = $cp[$cp[$implMethod->getReferenceIndex()]->getNameAndTypeIndex()];
        $lambdaName = $cp[$lambdaInfo->getNameIndex()]->getString();
        $lambdaDescriptor = $cp[$lambdaInfo->getDescriptorIndex()]->getString();

        // Create a lambda class.
        return new Lambda(
            $javaClass,
            $invokedName,
            $lambdaName,
            $lambdaDescriptor,
            $class
        );
    }
}
