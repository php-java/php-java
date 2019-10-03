<?php
namespace PHPJava\Compiler\Lang\Assembler\Enhancer;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\NameAndTypeInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Utilities\Formatter;

class ConstantPoolEnhancer
{
    /**
     * @var ConstantPool
     */
    protected $constantPool;

    /**
     * @var ConstantPoolFinder
     */
    protected $constantPoolFinder;

    public function __construct(ConstantPool $constantPool, ConstantPoolFinder $constantPoolFinder)
    {
        $this->constantPool = $constantPool;
        $this->constantPoolFinder = $constantPoolFinder;
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public static function factory(ConstantPool $constantPool, ConstantPoolFinder $constantPoolFinder): self
    {
        static $caches = [];
        $cacheKey = spl_object_hash($constantPool) . spl_object_hash($constantPoolFinder);

        if (isset($caches[$cacheKey])) {
            return $caches[$cacheKey];
        }

        return $caches[$cacheKey] = new static($constantPool, $constantPoolFinder);
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public function addClass(string $className): self
    {
        $className = Formatter::convertPHPNamespacesToJava($className, '/');

        // Add UTF8 strings.
        $this->constantPool
            ->add(
                Utf8Info::factory($className)
            );

        // Add Info Structure
        $this->constantPool
            ->add(
                ClassInfo::factory(
                    $this->constantPoolFinder
                        ->find(
                            Utf8Info::class,
                            $className
                        )
                )
            );

        return $this;
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public function addString(string $string): self
    {
        // Add UTF8 strings.
        $this->constantPool
            ->add(
                Utf8Info::factory($string)
            );

        // Add Info structures.
        $this->constantPool
            ->add(
                StringInfo::factory(
                    $this->constantPoolFinder
                        ->find(
                            Utf8Info::class,
                            $string
                        )
                )
            );

        return $this;
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public function addInteger(int $value): self
    {
        $this->constantPool
            ->add(
                IntegerInfo::factory($value)
            );

        return $this;
    }

    public function addNameAndType(string $name, string $descriptor)
    {
        // Add UTF8 strings.
        $this->constantPool
            ->add(
                Utf8Info::factory($name)
            )
            ->add(
                Utf8Info::factory($descriptor)
            );

        // Add NameAndType structures
        $this->constantPool
            ->add(
                NameAndTypeInfo::factory(
                    $this->constantPoolFinder
                        ->find(
                            Utf8Info::class,
                            $name
                        ),
                    $this->constantPoolFinder
                        ->find(
                            Utf8Info::class,
                            $descriptor
                        )
                )
            );
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public function addFieldref(string $className, string $fieldName, string $fieldDescriptor): self
    {
        $className = Formatter::convertPHPNamespacesToJava($className, '/');

        // Add NameAndType structure
        $this->addNameAndType(
            $fieldName,
            $fieldDescriptor
        );

        // Add Info Structure
        $this->constantPool
            ->add(
                FieldrefInfo::factory(
                    $this->constantPoolFinder
                        ->find(
                            ClassInfo::class,
                            $className
                        ),
                    $this->constantPoolFinder
                        ->find(
                            NameAndTypeInfo::class,
                            $fieldName,
                            $fieldDescriptor
                        )
                )
            );

        return $this;
    }

    /**
     * @return ConstantPoolEnhancer
     */
    public function addMethodref(string $className, string $methodName, string $methodDescriptor): self
    {
        $className = Formatter::convertPHPNamespacesToJava($className, '/');

        $this->addNameAndType(
            $methodName,
            $methodDescriptor
        );

        // Add Info structures
        $this->constantPool
            ->add(
                MethodrefInfo::factory(
                    $this->constantPoolFinder
                        ->find(
                            ClassInfo::class,
                            $className
                        ),
                    $this->constantPoolFinder
                        ->find(
                            NameAndTypeInfo::class,
                            $methodName,
                            $methodDescriptor
                        )
                )
            );
        return $this;
    }

    public function findClass(string $classPath): FinderResultInterface
    {
        return $this->constantPoolFinder->find(
            ClassInfo::class,
            Formatter::convertPHPNamespacesToJava(
                $classPath,
                '/'
            )
        );
    }

    public function findMethod(string $classPath, string $methodName, string $descriptor): FinderResultInterface
    {
        return $this->constantPoolFinder->find(
            MethodrefInfo::class,
            Formatter::convertPHPNamespacesToJava(
                $classPath,
                '/'
            ),
            $methodName,
            $descriptor
        );
    }
}
