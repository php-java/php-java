<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\util\ResourceBundle;

// use PHPJava\Packages\java\util\Set;

/**
 * The `ListResourceBundle` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\ResourceBundle
 */
class ListResourceBundle extends ResourceBundle /* implements Set */
{

    /**
     * Returns an array in which each item is a pair of objects in an Object array.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getContents
     */
    protected function getContents($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Enumeration of the keys contained in this ResourceBundle and its parent bundles.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getKeys
     */
    public function getKeys($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a Set of the keys contained only in this ResourceBundle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#handleKeySet
     */
    protected function handleKeySet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
