<?php
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Attributes\NestMembersAttribute;
use PHPJava\Kernel\Internal\Lambda;
use PHPJava\Kernel\Structures\_Class;
use PHPJava\Kernel\Structures\_MethodHandle;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\ClassResolver;

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
     * @native JavaClass
     * @native ConstantPool
     * @param JavaClass $javaClass
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

//
//        [$resourceType, $classObject] = $javaClass->getOptions('class_resolver')
//            ->resolve($class);
//
//        switch ($resourceType) {
//            case ClassResolver::RESOLVED_TYPE_PACKAGES:
//                break;
//            case ClassResolver::RESOLVED_TYPE_CLASS:
//                /**
//                 * @var JavaClass $classObject
//                 */
//                break;
//        }

        /**
         * @var NestMembersAttribute $nestMembersAttribute
         */
//        $nestMembersAttribute = AttributionResolver::resolve(
//            $javaClass->getAttributes(),
//            NestMembersAttribute::class
//        );



//        /**
//         * @var _Class $class
//         */
//        foreach ($nestMembersAttribute->getClasses() as $class) {
//            var_dump($cp[$class->getClassIndex()]);
//        }

        // The Lambda class.
        return new Lambda(
            $javaClass,
            $lambdaName,
            $lambdaDescriptor,
            $class
        );
    }
}
