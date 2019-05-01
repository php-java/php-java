<?php
namespace PHPJava\Packages\java\util\Formatter;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `BigDecimalLayoutForm` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class BigDecimalLayoutForm extends Enum /* implements Serializable, Comparable */
{
    /*
     * Format the BigDecimal as a decimal number.
     */
    const DECIMAL_FLOAT = 'DECIMAL_FLOAT';

    /*
     * Format the BigDecimal in computerized scientific notation.
     */
    const SCIENTIFIC = 'SCIENTIFIC';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
