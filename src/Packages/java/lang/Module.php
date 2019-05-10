<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\lang\reflect\AnnotatedElement;
// use PHPJava\Packages\java\lang\annotation\Annotation;
// use PHPJava\Packages\java\util\Set;

/**
 * The `Module` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Module extends _Object // implements AnnotatedElement, Annotation, Set
{
    /**
     * If the caller's module is this module then update this module to export the given package to the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addExports
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function addExports($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If this module has opened a package to at least the caller module then update this module to open the package to the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addOpens
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function addOpens($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If the caller's module is this module then update this module to read the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addReads
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addReads($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If the caller's module is this module then update this module to add a service dependence on the given service type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addUses
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addUses($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates if this module reads the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#canRead
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function canRead($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates if this module has a service dependence on the given service type.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#canUse
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function canUse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

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
     * Returns the ClassLoader for this module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getClassLoader($a = null)
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
     * Returns the module descriptor for this module or null if this module is an unnamed module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDescriptor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the module layer that contains this module or null if this module is not in a module layer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getLayer
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLayer($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the module name or null if this module is an unnamed module.
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
     * Returns the set of package names for the packages in this module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading a resource in this module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResourceAsStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module exports the given package unconditionally.
     * Returns true if this module exports the given package to at least the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isExported
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function isExported($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module is a named module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isNamed
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isNamed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module has opened a package unconditionally.
     * Returns true if this module has opened a package to at least the given module.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isOpen
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function isOpen($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of this module.
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
