<?php
namespace PHPJava\Core;

use PHPJava\Core\Extended\ClassInvokable;
use PHPJava\Core\Stream\Reader\FileReader;
use PHPJava\Core\Stream\Reader\PackageReader;
use PHPJava\Kernel\Internal\JavaClassDeferredLoader;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Packages\java\lang\ClassNotFoundException;
use PHPJava\Utilities\Formatter;

class JavaClass implements JavaClassInterface
{
    use ClassInvokable;

    /**
     * @var JavaGenericClassInterface
     */
    private $genericClass;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var array
     */
    private static $lastOptions = [];

    public function __construct(JavaGenericClassInterface $genericClass)
    {
        $this->genericClass = $genericClass;
    }

    /**
     * @param $methodName
     * @param $arguments
     */
    public function __call($methodName, $arguments)
    {
        return $this->genericClass->{$methodName}(...$arguments);
    }

    public function isCompiledClass(): bool
    {
        return $this->genericClass instanceof JavaCompiledClass;
    }

    public function isSimpleClass(): bool
    {
        return $this->genericClass instanceof JavaSimpleClass;
    }

    /**
     * @return JavaClass
     */
    public static function of(JavaClassInterface $javaClass)
    {
        if ($javaClass instanceof JavaClass) {
            return $javaClass;
        }
        return new JavaClass($javaClass);
    }

    public function is(string $className): bool
    {
        $className = Formatter::convertPHPNamespacesToJava($className);

        // get parents
        $extendedClasses = $this->genericClass->getDefinedExtendedClasses();
        $interfaceClasses = $this->genericClass->getDefinedInterfaceClasses();

        return in_array($className, $extendedClasses, true) ||
            in_array($className, $interfaceClasses, true);
    }

    public function __toString(): string
    {
        return $this
            ->genericClass
            ->getInvoker()
            ->getDynamic()
            ->getMethods()
            ->call(
                'toString'
            );
    }

    /**
     * @throws ClassNotFoundException
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     * @throws \PHPJava\Exceptions\ValidatorException
     */
    public static function load(string $classPath, array $options = [], bool $enableInstantiated = true): JavaClass
    {
        static $loaded = [];
        $classPath = str_replace('/', '.', Formatter::convertPHPNamespacesToJava($classPath));

        if (isset($loaded[$classPath]) && !$enableInstantiated) {
            return $loaded[$classPath];
        }

        [$type, ] = Formatter::convertJavaNamespaceToPHP(
            $classPath
        );

        // Add resolving path.
        ClassResolver::add(
            [
                [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
            ]
        );

        $instance = null;
        if ($type === Formatter::BUILT_IN_PACKAGE) {
            $instance = new JavaSimpleClass(
                new PackageReader(
                    $classPath
                ),
                $options
            );
        } else {
            foreach (ClassResolver::getClassPaths() as [$resourceType, $value]) {
                try {
                    switch ($resourceType) {
                        case ClassResolver::RESOURCE_TYPE_JAR:
                            /**
                             * @var JavaArchive $value
                             */
                            $instance = $value->getClassByName($classPath);
                            break;
                        case ClassResolver::RESOURCE_TYPE_FILE:
                            $path = realpath(
                                $value . '/' . ltrim(str_replace('.', '/', $classPath) . '.class', '/')
                            );
                            if ($path === false) {
                                break;
                            }
                            $instance = new JavaCompiledClass(
                                new FileReader($path),
                                $options
                            );
                            break;
                    }
                    if ($instance !== null) {
                        break;
                    }
                } catch (ClassNotFoundException $e) {
                    // do nothing
                }
            }
        }

        if ($instance === null) {
            throw new ClassNotFoundException('Class ' . $classPath . ' does not exist.');
        }

        return $loaded[$classPath] = static::of($instance);
    }

    /**
     * @return JavaClassDeferredLoader
     */
    public static function deferred(string $classPath, array $options = [])
    {
        return new JavaClassDeferredLoader(
            $classPath,
            $options
        );
    }
}
