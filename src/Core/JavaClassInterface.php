<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Packages\java\lang\_Class;

/**
 * @method ConstantPool getConstantPool()
 * @method JavaClass getSuperClass()
 * @method void debug()
 * @method array getAttributes()
 * @method ClassInvokerInterface getInvoker()
 * @method array getDefinedMethods()
 * @method array getDefinedFields()
 * @method array getDefinedExtendedClasses()
 * @method array getDefinedInterfaceClasses()
 * @method array getDefinedInnerClasses()
 * @method string getPackageName()
 * @method string getClassName(bool $shortName = false)
 * @method mixed getOptions($key = null)
 * @method mixed __invoke(...$parameters)
 * @method _Class getClass()
 * @method string __toString()
 */
interface JavaClassInterface
{
}
