<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `EventObject` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class EventObject extends _Object /* implements Serializable */
{
    /**
     * The object on which the Event initially occurred.
     *
     * @var mixed $source
     */
    protected $source = null;


    /**
     * The object on which the Event initially occurred.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getSource
     */
    public function getSource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String representation of this EventObject.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
