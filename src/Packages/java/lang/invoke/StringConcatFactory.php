<?php
namespace PHPJava\Packages\java\lang\invoke;

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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#makeConcat
     */
    public static function makeConcat($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Facilitates the creation of optimized String concatenation methods, that can be used to efficiently concatenate a known number of arguments of known types, possibly after type adaptation and partial evaluation of arguments.
     *
     * @native ConstantPool
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws StringConcatException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#makeConcatWithConstants
     */
    public static function makeConcatWithConstants(ConstantPool $cp, $a, $b, $c, $d, ...$e)
    {
        /**
         * @var Lookup $lookup
         * @var MethodType $concatType
         * @var _String|null $name
         * @var string recipe
         * @var _Object[] $constants
         */
        $lookup = $a;
        $name = $b;
        $concatType = $c;
        $recipe = $d;
        if ($recipe instanceof \PHPJava\Kernel\Structures\_String) {
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
            if ($char === $unicodeMeta["\u0001"]) {
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
            $concatType->returnType()
        );
        
        return new $returnType($newString);
    }
}
