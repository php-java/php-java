<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util\Locale;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `FilteringMode` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class FilteringMode extends Enum // implements Serializable, Comparable
{
    // Specifies automatic filtering mode based on the given Language Priority List consisting of language ranges.
    const AUTOSELECT_FILTERING = 'AUTOSELECT_FILTERING';

    // Specifies extended filtering.
    const EXTENDED_FILTERING = 'EXTENDED_FILTERING';

    // Specifies basic filtering: Note that any extended language ranges included in the given Language Priority List are ignored.
    const IGNORE_EXTENDED_RANGES = 'IGNORE_EXTENDED_RANGES';

    // Specifies basic filtering: If any extended language ranges are included in the given Language Priority List, they are mapped to the basic language range.
    const MAP_EXTENDED_RANGES = 'MAP_EXTENDED_RANGES';

    // Specifies basic filtering: If any extended language ranges are included in the given Language Priority List, the list is rejected and the filtering method throws IllegalArgumentException.
    const REJECT_EXTENDED_RANGES = 'REJECT_EXTENDED_RANGES';

    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#valueOf
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#values
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
