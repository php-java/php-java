<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `ExceptionInInitializerError` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\Throwable
 * @parent \PHPJava\Packages\java\lang\Error
 * @parent \PHPJava\Packages\java\lang\LinkageError
 */
class ExceptionInInitializerError extends LinkageError // implements Serializable
{
    /**
     * Returns the cause of this error (the exception that occurred during a static initialization that caused this error to be created).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getCause
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCause($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the exception that occurred during a static initialization that caused this error to be created.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getException
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getException($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
