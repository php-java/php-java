<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\invoke;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;
use PHPJava\Utilities\Formatter;

/**
 * The `StringConcatFactory` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class StringConcatFactory extends _Object
{
    /**
     * Facilitates the creation of optimized String concatenation methods, that can be used to efficiently concatenate a known number of arguments of known types, possibly after type adaptation and partial evaluation of arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#makeConcat
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function makeConcat($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Facilitates the creation of optimized String concatenation methods, that can be used to efficiently concatenate a known number of arguments of known types, possibly after type adaptation and partial evaluation of arguments.
     *
     * @native ConstantPool
     * @param mixed $e
     * @throws StringConcatException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#makeConcatWithConstants
     */
    public static function makeConcatWithConstants(ConstantPool $cp, $a, $b, $c, $d, ...$e)
    {
        /**
         * @var Lookup $lookup
         * @var JavaClass $concatType
         * @var null|_String $name
         * @var string recipe
         * @var _Object[] $constants
         */
        $lookup = $a;
        $name = $b;
        $concatType = $c;
        $recipe = $d;
        if ($recipe instanceof \PHPJava\Kernel\Structures\StringInfo) {
            $recipe = $cp[$recipe->getStringIndex()]->getString();
        }
        $constants = $e;

        $newString = '';

        $unicodeMeta = [
            '\u0001' => "\x01",
            '\u0002' => "\x02",
        ];

        $counter = 0;
        for ($i = 0, $s = strlen($recipe); $i < $s; $i++) {
            $char = $recipe[$i];
            if ($char === $unicodeMeta['\\u0001']) {
                if (!isset($constants[$counter])) {
                    throw new StringConcatException('Unknown error.');
                }
                $newString .= $constants[$counter];
                $counter++;
                continue;
            }
            $newString .= $char;
        }

        [, $returnType] = Formatter::convertJavaNamespaceToPHP(
            $concatType
                ->getInvoker()
                ->getDynamic()
                ->getMethods()
                ->call(
                    'returnType'
                )
        );

        return JavaClass::load('java.lang.String')
            ->getInvoker()
            ->construct($newString)
            ->getJavaClass();
    }
}
