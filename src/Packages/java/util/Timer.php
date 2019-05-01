<?php
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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#cancel
     */
    public function cancel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all cancelled tasks from this timer's task queue.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#purge
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#schedule
     */
    public function schedule($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Schedules the specified task for repeated fixed-rate execution, beginning after the specified delay.
     * Schedules the specified task for repeated fixed-rate execution, beginning at the specified time.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#scheduleAtFixedRate
     */
    public function scheduleAtFixedRate($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
