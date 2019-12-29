<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Iterable;
// use PHPJava\Packages\java\util\_List;
// use PHPJava\Packages\java\util\function\UnaryOperator;

/**
 * The `Vector` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\AbstractCollection
 * @parent \PHPJava\Packages\java\util\AbstractList
 */
class Vector extends AbstractList // implements Serializable, Iterable, _List, UnaryOperator
{
    /**
     * The amount by which the capacity of the vector is automatically incremented when its size becomes greater than its capacity.
     *
     * @var mixed $capacityIncrement
     */
    public $capacityIncrement;

    /**
     * The number of valid components in this Vector object.
     *
     * @var mixed $elementCount
     */
    public $elementCount;

    /**
     * The array buffer into which the components of the vector are stored.
     *
     * @var mixed $elementData
     */
    public $elementData;

    /**
     * Inserts the specified element at the specified position in this Vector.
     * Appends the specified element to the end of this Vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#add
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function add($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Inserts all of the elements in the specified Collection into this Vector at the specified position.
     * Appends all of the elements in the specified Collection to the end of this Vector, in the order that they are returned by the specified Collection's Iterator.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#addAll
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function addAll($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adds the specified component to the end of this vector, increasing its size by one.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#addElement
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addElement($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current capacity of this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#capacity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function capacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all of the elements from this Vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clear
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function clear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a clone of this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clone
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function clone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this vector contains the specified element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#contains
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function contains($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this Vector contains all of the elements in the specified Collection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#containsAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function containsAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Copies the components of this vector into the specified array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#copyInto
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function copyInto($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the component at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#elementAt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function elementAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an enumeration of the components of this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#elements
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function elements($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Increases the capacity of this vector, if necessary, to ensure that it can hold at least the number of components specified by the minimum capacity argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ensureCapacity
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ensureCapacity($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the specified Object with this Vector for equality.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the first component (the item at index 0) of this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#firstElement
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function firstElement($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Performs the given action for each element of the Iterable until all elements have been processed or the action throws an exception.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#forEach
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function forEach($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the element at the specified position in this Vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#get
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code value for this Vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index of the first occurrence of the specified element in this vector, or -1 if this vector does not contain the element.
     * Returns the index of the first occurrence of the specified element in this vector, searching forwards from index, or returns -1 if the element is not found.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#indexOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function indexOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Inserts the specified object as a component in this vector at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#insertElementAt
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function insertElementAt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this vector has no components.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isEmpty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isEmpty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an iterator over the elements in this list in proper sequence.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#iterator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function iterator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the last component of the vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lastElement
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lastElement($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the index of the last occurrence of the specified element in this vector, or -1 if this vector does not contain the element.
     * Returns the index of the last occurrence of the specified element in this vector, searching backwards from index, or returns -1 if the element is not found.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#lastIndexOf
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function lastIndexOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a list iterator over the elements in this list (in proper sequence).
     * Returns a list iterator over the elements in this list (in proper sequence), starting at the specified position in the list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#listIterator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function listIterator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the element at the specified position in this Vector.
     * Removes the first occurrence of the specified element in this Vector If the Vector does not contain the element, it is unchanged.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#remove
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function remove($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes from this Vector all of its elements that are contained in the specified Collection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function removeAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all components from this vector and sets its size to zero.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeAllElements
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function removeAllElements($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the first (lowest-indexed) occurrence of the argument from this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeElement
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function removeElement($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deletes the component at the specified index.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeElementAt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function removeElementAt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all of the elements of this collection that satisfy the given predicate.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeIf
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function removeIf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes from this list all of the elements whose index is between fromIndex, inclusive, and toIndex, exclusive.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#removeRange
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    protected function removeRange($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Replaces each element of this list with the result of applying the operator to that element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#replaceAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function replaceAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retains only the elements in this Vector that are contained in the specified Collection.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#retainAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function retainAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Replaces the element at the specified position in this Vector with the specified element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#set
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function set($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the component at the specified index of this vector to be the specified object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setElementAt
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setElementAt($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the size of this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of components in this vector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#size
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function size($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a late-binding and fail-fast Spliterator over the elements in this list.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#spliterator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function spliterator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a view of the portion of this List between fromIndex, inclusive, and toIndex, exclusive.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#subList
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function subList($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing all of the elements in this Vector in the correct order.
     * Returns an array containing all of the elements in this Vector in the correct order; the runtime type of the returned array is that of the specified array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toArray
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this Vector, containing the String representation of each element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Trims the capacity of this vector to be the vector's current size.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#trimToSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function trimToSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
