<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Kernel\Internal\Lambda;
use PHPJava\Kernel\Structures\_MethodHandle;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;
use PHPJava\Utilities\Extractor;

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
     * @native JavaClass
     * @native ConstantPool
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public static function altMetafactory(JavaClass $javaClass, ConstantPool $cp, $a = null, $b = null, $c = null, ...$d)
    {
        $caller = $a;
        $invokedName = $b;
        $invokedType = $c;
        $args = $d;

//        $samMethodType = $args[0];
//        $implMethod = $args[1];
//        $instantiatedMethodType = $args[2];
//        $flags = Extractor::getRealValue($args[3]);
//
//        $lambdaInfo = $cp[$cp[$implMethod->getReferenceIndex()]->getNameAndTypeIndex()];
//        $lambdaName = $cp[$lambdaInfo->getNameIndex()]->getString();
//        $lambdaDescriptor = $cp[$lambdaInfo->getDescriptorIndex()]->getString();

        if ($invokedType instanceof JavaClassInterface) {
            return $invokedType->getInvoker()->getDynamic()->getMethods()->call(
                $invokedName
            );
        }

        throw new RuntimeException('Implementing now.');
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
            $lambdaName,
            $lambdaDescriptor,
            $class
        );
    }
}
