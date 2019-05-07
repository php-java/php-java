<?php
namespace PHPJava\Packages\java\lang\ProcessBuilder\Redirect;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `Type` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class Type extends Enum /* implements Serializable, Comparable */
{
    /*
     * The type of redirects returned from Redirect.appendTo(File).
     */
    const APPEND = 'APPEND';

    /*
     * The type of Redirect.INHERIT.
     */
    const INHERIT = 'INHERIT';

    /*
     * The type of Redirect.PIPE.
     */
    const PIPE = 'PIPE';

    /*
     * The type of redirects returned from Redirect.from(File).
     */
    const READ = 'READ';

    /*
     * The type of redirects returned from Redirect.to(File).
     */
    const WRITE = 'WRITE';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
