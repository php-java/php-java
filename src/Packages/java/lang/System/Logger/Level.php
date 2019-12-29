<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\System\Logger;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\loggers;

/**
 * The `Level` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class Level extends Enum // implements Serializable, loggers
{
    // A marker to indicate that all levels are enabled.
    const ALL = 'ALL';

    // DEBUG level: usually used to log debug information traces.
    const DEBUG = 'DEBUG';

    // ERROR level: usually used to log error messages.
    const ERROR = 'ERROR';

    // INFO level: usually used to log information messages.
    const INFO = 'INFO';

    // A marker to indicate that all levels are disabled.
    const OFF = 'OFF';

    // TRACE level: usually used to log diagnostic information.
    const TRACE = 'TRACE';

    // WARNING level: usually used to log warning messages.
    const WARNING = 'WARNING';

    /**
     * Returns the name of this level.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the severity of this level.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSeverity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSeverity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#values
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
