<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\util\Set;

/**
 * The `ListResourceBundle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\util\ResourceBundle
 */
class ListResourceBundle extends ResourceBundle // implements Set
{
    /**
     * Returns an array in which each item is a pair of objects in an Object array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getContents
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function getContents($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Enumeration of the keys contained in this ResourceBundle and its parent bundles.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getKeys
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of the keys contained only in this ResourceBundle.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleKeySet
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function handleKeySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
