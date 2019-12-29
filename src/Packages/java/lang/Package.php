<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\lang\reflect\AnnotatedElement;
// use PHPJava\Packages\java\lang\annotation\Annotation;

/**
 * The `Package` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class Package extends Object_ // implements AnnotatedElement, Annotation
{
    /**
     * Returns this element's annotation for the specified type if such an annotation is present, else null.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotation
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAnnotation($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are present on this element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotations
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAnnotations($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are associated with this element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotationsByType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAnnotationsByType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this element's annotation for the specified type if such an annotation is directly present, else null.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotation
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDeclaredAnnotation($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are directly present on this element.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotations
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDeclaredAnnotations($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this element's annotation(s) for the specified type if such annotations are either directly present or indirectly present.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotationsByType
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDeclaredAnnotationsByType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the title of this package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationTitle
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getImplementationTitle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the vendor that implemented this package, null is returned if it is not known.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationVendor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getImplementationVendor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the version of this implementation.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationVersion
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getImplementationVersion($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the name of this package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.If multiple class loaders delegate to each other and define classes with the same package name, and one such loader relies on the lookup behavior of getPackage to return a Package from a parent loader, then the properties exposed by the Package may not be as expected in the rest of the program.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackage
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages defined by the caller's class loader and its ancestors.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the title of the specification that this package implements.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationTitle
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSpecificationTitle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the name of the organization, vendor, or company that owns and maintains the specification of the classes that implement this package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationVendor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSpecificationVendor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the version number of the specification that this package implements.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationVersion
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getSpecificationVersion($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the hash code computed from the package name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if an annotation for the specified type is present on this element, else false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAnnotationPresent
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAnnotationPresent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compare this package's specification version with a desired version.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isCompatibleWith
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isCompatibleWith($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this package is sealed.
     * Returns true if this package is sealed with respect to the specified code source url.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSealed
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isSealed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of this Package.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
