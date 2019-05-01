<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\function\_Function;
// use PHPJava\Packages\java\util\Set;

/**
 * The `ModuleLayer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ModuleLayer extends _Object /* implements _Function, Set */
{

    /**
     * Returns the boot layer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#boot
     */
    public static function static_boot($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the configuration for this layer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#configuration
     */
    public function configuration($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new module layer, with this layer as its parent, by defining the modules in the given Configuration to the Java virtual machine.
     * Creates a new module layer by defining the modules in the given  Configuration to the Java virtual machine.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#defineModules
     */
    public static function static_defineModules($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new module layer, with this layer as its parent, by defining the modules in the given Configuration to the Java virtual machine.
     * Creates a new module layer by defining the modules in the given  Configuration to the Java virtual machine.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#defineModulesWithManyLoaders
     */
    public static function static_defineModulesWithManyLoaders($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a new module layer, with this layer as its parent, by defining the modules in the given Configuration to the Java virtual machine.
     * Creates a new module layer by defining the modules in the given  Configuration to the Java virtual machine.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#defineModulesWithOneLoader
     */
    public static function static_defineModulesWithOneLoader($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the empty layer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#empty
     */
    public static function static_empty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the ClassLoader for the module with the given name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findLoader
     */
    public function findLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the module with the given name in this layer, or if not in this layer, the parent layers.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#findModule
     */
    public function findModule($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the set of the modules in this layer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#modules
     */
    public function modules($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the list of this layer's parents unless this is the empty layer, which has no parents and so an empty list is returned.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#parents
     */
    public function parents($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string describing this module layer.
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
