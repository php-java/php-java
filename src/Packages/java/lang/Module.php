<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\reflect\AnnotatedElement;
// use PHPJava\Packages\java\lang\annotation\Annotation;
// use PHPJava\Packages\java\util\Set;

/**
 * The `Module` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Module extends _Object /* implements AnnotatedElement, Annotation, Set */
{

    /**
     * If the caller's module is this module then update this module to export the given package to the given module.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addExports
     */
    public function addExports($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If this module has opened a package to at least the caller module then update this module to open the package to the given module.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addOpens
     */
    public function addOpens($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If the caller's module is this module then update this module to read the given module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addReads
     */
    public function addReads($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If the caller's module is this module then update this module to add a service dependence on the given service type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#addUses
     */
    public function addUses($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates if this module reads the given module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#canRead
     */
    public function canRead($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates if this module has a service dependence on the given service type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#canUse
     */
    public function canUse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

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
     * Returns the ClassLoader for this module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getClassLoader
     */
    public function getClassLoader($a = null)
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
     * Returns the module descriptor for this module or null if this module is an unnamed module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDescriptor
     */
    public function getDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the module layer that contains this module or null if this module is not in a module layer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getLayer
     */
    public function getLayer($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the module name or null if this module is an unnamed module.
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
     * Returns the set of package names for the packages in this module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPackages
     */
    public function getPackages($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for reading a resource in this module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getResourceAsStream
     */
    public function getResourceAsStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module exports the given package unconditionally.
     * Returns true if this module exports the given package to at least the given module.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isExported
     */
    public function isExported($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module is a named module.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isNamed
     */
    public function isNamed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this module has opened a package unconditionally.
     * Returns true if this module has opened a package to at least the given module.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isOpen
     */
    public function isOpen($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the string representation of this module.
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
