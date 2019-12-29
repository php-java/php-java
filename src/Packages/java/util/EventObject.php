<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `EventObject` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class EventObject extends Object_ // implements Serializable
{
    /**
     * The object on which the Event initially occurred.
     *
     * @var mixed $source
     */
    protected $source;

    /**
     * The object on which the Event initially occurred.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getSource
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSource($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String representation of this EventObject.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
