<?php
namespace PHPJava\Packages\java\io\ObjectOutputStream;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\ObjectOutput;

/**
 * The `PutField` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class PutField extends _Object /* implements ObjectOutput */
{

    /**
     * Put the value of the named boolean field into the persistent field.
     * Put the value of the named byte field into the persistent field.
     * Put the value of the named char field into the persistent field.
     * Put the value of the named double field into the persistent field.
     * Put the value of the named float field into the persistent field.
     * Put the value of the named int field into the persistent field.
     * Put the value of the named long field into the persistent field.
     * Put the value of the named short field into the persistent field.
     * Put the value of the named Object field into the persistent field.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#put
     */
    public function put($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method does not write the values contained by this         PutField object in a proper format, and may         result in corruption of the serialization stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#write
     */
    public function write($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
