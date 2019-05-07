<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\reflect\AnnotatedElement;
// use PHPJava\Packages\java\lang\annotation\Annotation;

/**
 * The `Package` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Package extends _Object /* implements AnnotatedElement, Annotation */
{

    /**
     * Returns this element's annotation for the specified type if such an annotation is present, else null.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotation
     */
    public function getAnnotation($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are present on this element.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotations
     */
    public function getAnnotations($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are associated with this element.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAnnotationsByType
     */
    public function getAnnotationsByType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this element's annotation for the specified type if such an annotation is directly present, else null.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotation
     */
    public function getDeclaredAnnotation($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns annotations that are directly present on this element.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotations
     */
    public function getDeclaredAnnotations($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this element's annotation(s) for the specified type if such annotations are either directly present or indirectly present.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDeclaredAnnotationsByType
     */
    public function getDeclaredAnnotationsByType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the title of this package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationTitle
     */
    public function getImplementationTitle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the vendor that implemented this package, null is returned if it is not known.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationVendor
     */
    public function getImplementationVendor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the version of this implementation.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getImplementationVersion
     */
    public function getImplementationVersion($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the name of this package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.If multiple class loaders delegate to each other and define classes with the same package name, and one such loader relies on the lookup behavior of getPackage to return a Package from a parent loader, then the properties exposed by the Package may not be as expected in the rest of the program.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackage
     */
    public static function static_getPackage($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns all of the Packages defined by the caller's class loader and its ancestors.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     */
    public static function static_getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the title of the specification that this package implements.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationTitle
     */
    public function getSpecificationTitle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the name of the organization, vendor, or company that owns and maintains the specification of the classes that implement this package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationVendor
     */
    public function getSpecificationVendor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the version number of the specification that this package implements.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSpecificationVersion
     */
    public function getSpecificationVersion($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return the hash code computed from the package name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if an annotation for the specified type is present on this element, else false.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAnnotationPresent
     */
    public function isAnnotationPresent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compare this package's specification version with a desired version.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isCompatibleWith
     */
    public function isCompatibleWith($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this package is sealed.
     * Returns true if this package is sealed with respect to the specified code source url.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isSealed
     */
    public function isSealed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of this Package.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
