<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Iterable;
// use PHPJava\Packages\java\util\Set;

/**
 * The `LinkedHashSet` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\util\AbstractCollection
 * @parent \PHPJava\Packages\java\util\AbstractSet
 * @parent \PHPJava\Packages\java\util\HashSet
 */
class LinkedHashSet extends HashSet // implements Serializable, Iterable, Set
{
    /**
     * Creates a late-binding and fail-fast Spliterator over the elements in this set.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#spliterator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function spliterator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
