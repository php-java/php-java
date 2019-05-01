<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\LinkageError;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `ExceptionInInitializerError` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Throwable
 * @parent \PHPJava\Packages\java\lang\Error
 * @parent \PHPJava\Packages\java\lang\LinkageError
 */
class ExceptionInInitializerError extends LinkageError /* implements Serializable */
{

    /**
     * Returns the cause of this error (the exception that occurred during a static initialization that caused this error to be created).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getCause
     */
    public function getCause($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the exception that occurred during a static initialization that caused this error to be created.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getException
     */
    public function getException($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
