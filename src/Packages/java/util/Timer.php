<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `Timer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Timer extends _Object
{
    /**
     * Terminates this timer, discarding any currently scheduled tasks.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#cancel
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function cancel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all cancelled tasks from this timer's task queue.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#purge
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function purge($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Schedules the specified task for execution after the specified delay.
     * Schedules the specified task for repeated fixed-delay execution, beginning after the specified delay.
     * Schedules the specified task for execution at the specified time.
     * Schedules the specified task for repeated fixed-delay execution, beginning at the specified time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#schedule
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function schedule($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Schedules the specified task for repeated fixed-rate execution, beginning after the specified delay.
     * Schedules the specified task for repeated fixed-rate execution, beginning at the specified time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#scheduleAtFixedRate
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function scheduleAtFixedRate($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
