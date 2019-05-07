<?php
namespace PHPJava\Packages\java\lang\invoke\MethodHandles;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\invoke\MethodHandleInfo;

/**
 * The `Lookup` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Lookup extends _Object /* implements MethodHandleInfo */
{
    /**
     * A single-bit mask representing module access (default access),  which may contribute to the result of lookupModes.
     *
     * @var mixed $MODULE
     */
    public static $MODULE = null;

    /**
     * A single-bit mask representing package access (default access),  which may contribute to the result of lookupModes.
     *
     * @var mixed $PACKAGE
     */
    public static $PACKAGE = null;

    /**
     * A single-bit mask representing private access,  which may contribute to the result of lookupModes.
     *
     * @var mixed $_PRIVATE
     */
    public static $_PRIVATE = null;

    /**
     * A single-bit mask representing protected access,  which may contribute to the result of lookupModes.
     *
     * @var mixed $_PROTECTED
     */
    public static $_PROTECTED = null;

    /**
     * A single-bit mask representing public access,  which may contribute to the result of lookupModes.
     *
     * @var mixed $_PUBLIC
     */
    public static $_PUBLIC = null;

    /**
     * A single-bit mask representing unconditional access  which may contribute to the result of lookupModes.
     *
     * @var mixed $UNCONDITIONAL
     */
    public static $UNCONDITIONAL = null;


    /**
     * Determines if a class can be accessed from the lookup context defined by this Lookup object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#accessClass
     */
    public function accessClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces an early-bound method handle for a non-static method.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#bind
     */
    public function bind($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Defines a class to the same class loader and in the same runtime package and protection domain as this lookup's lookup class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#defineClass
     */
    public function defineClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a lookup on the same lookup class which this lookup object finds members, but with a lookup mode that has lost the given lookup mode.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#dropLookupMode
     */
    public function dropLookupMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Looks up a class by name from the lookup context defined by this Lookup object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findClass
     */
    public function findClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle which creates an object and initializes it, using the constructor of the specified type.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findConstructor
     */
    public function findConstructor($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving read access to a non-static field.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findGetter
     */
    public function findGetter($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving write access to a non-static field.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findSetter
     */
    public function findSetter($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces an early-bound method handle for a virtual method.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findSpecial
     */
    public function findSpecial($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle for a static method.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findStatic
     */
    public function findStatic($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving read access to a static field.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findStaticGetter
     */
    public function findStaticGetter($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving write access to a static field.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findStaticSetter
     */
    public function findStaticSetter($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to a static field name of type type declared in a class of type decl.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findStaticVarHandle
     */
    public function findStaticVarHandle($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to a non-static field name of type type declared in a class of type recv.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findVarHandle
     */
    public function findVarHandle($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle for a virtual method.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#findVirtual
     */
    public function findVirtual($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this lookup has PRIVATE access.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#hasPrivateAccess
     */
    public function hasPrivateAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a lookup on the specified new lookup class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#in
     */
    public function in($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells which class is performing the lookup.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lookupClass
     */
    public function lookupClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells which access-protection classes of members this lookup object can produce.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#lookupModes
     */
    public function lookupModes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Cracks a direct method handle created by this lookup object or a similar one.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#revealDirect
     */
    public function revealDirect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Displays the name of the class from which lookups are to be made.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Makes a direct method handle to m, if the lookup class has permission.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflect
     */
    public function unreflect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle for a reflected constructor.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflectConstructor
     */
    public function unreflectConstructor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving read access to a reflected field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflectGetter
     */
    public function unreflectGetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle giving write access to a reflected field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflectSetter
     */
    public function unreflectSetter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a method handle for a reflected method.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflectSpecial
     */
    public function unreflectSpecial($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Produces a VarHandle giving access to a reflected field f of type T declared in a class of type R.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/invoke/package-summary.html#unreflectVarHandle
     */
    public function unreflectVarHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
