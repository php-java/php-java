<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\JavaClassInvokerInterface;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Packages\java\lang\_Class;

/**
 * @method __construct(ReaderInterface $reader, array $options = [])
 * @method ConstantPool getConstantPool()
 * @method JavaClass getSuperClass()
 * @method void debug()
 * @method array getAttributes()
 * @method JavaClass getParentClass()
 * @method bool hasParentClass()
 * @method JavaClassInvokerInterface getInvoker()
 * @method array getDefinedMethods()
 * @method array getDefinedFields()
 * @method array getInnerClasses()
 * @method string getPackageName()
 * @method string getClassName(bool $shortName = false)
 * @method mixed getOptions($key = null)
 * @method mixed __invoke(...$parameters)
 * @method _Class getClass()
 * @method setParentClass(JavaClassInterface $class)
 */
interface JavaGenericClassInterface
{
}
