<?php
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Core\JavaArchive;
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\JavaGenericClassInterface;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\Stream\Reader\FileReader;
use PHPJava\Packages\java\lang\ClassNotFoundException;

class ClassResolver
{
    const MAPS = Runtime::PHP_PACKAGES_MAPS;

    // resource types
    const RESOURCE_TYPE_FILE = 'RESOURCE_TYPE_FILE';
    const RESOURCE_TYPE_JAR = 'RESOURCE_TYPE_JAR';
    const RESOURCE_TYPE_CLASS = 'RESOURCE_TYPE_CLASS';
    const RESOURCE_TYPE_INNER_CLASS = 'RESOURCE_TYPE_INNER_CLASS';

    // resolved types
    const RESOLVED_TYPE_CLASS = 'RESOLVED_TYPE_CLASS';
    const RESOLVED_TYPE_PACKAGES = 'RESOLVED_TYPE_PACKAGES';

    /**
     * @var array
     */
    private static $resolves = [];

    /**
     * @var (string|JavaClass)[][]
     */
    private $resolvedPaths = [];

    /**
     * @var array
     */
    private $options = [];

    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function resolve(string $javaPath, JavaClassInterface $class = null, bool $instantiation = true): array
    {
        $javaPath = str_replace('/', '.', $javaPath);
        $namespaces = explode('.', $javaPath);
        $buildClassPath = [];
        foreach ($namespaces as $namespace) {
            $buildClassPath[] = static::MAPS[$namespace] ?? $namespace;
        }

        // resolve something approaching
        $relativePath = implode('/', $namespaces);

        foreach (static::$resolves as [$resourceType, $value]) {
            switch ($resourceType) {
                case static::RESOURCE_TYPE_INNER_CLASS:
                    // TODO: Implement here
                    break;
                case static::RESOURCE_TYPE_JAR:
                    /**
                     * @var JavaArchive $value
                     */
                    try {
                        return $this->resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            $value->getClassByName($relativePath),
                        ];
                    } catch (ClassNotFoundException $e) {
                    }
                    break;
                case static::RESOURCE_TYPE_FILE:
                    $path = realpath($value . '/' . $relativePath . '.class');
                    if ($path === false) {
                        break;
                    }
                    if (!$instantiation) {
                        foreach ($this->resolvedPaths as [$resolvedPath, $class]) {
                            if ($relativePath === $class->getClassName()) {
                                return [$resolvedPath, $class];
                            }
                        }
                    }
                    /**
                     * @var JavaClass $initiatedClass
                     */
                    if (is_file($path)) {
                        $initiatedClass = new JavaClass(
                            new JavaCompiledClass(
                                new FileReader($path),
                                $this->options
                            )
                        );

                        return $this->resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            $initiatedClass,
                        ];
                    }
                    break;
                case static::RESOURCE_TYPE_CLASS:
                    if (!$instantiation) {
                        foreach ($this->resolvedPaths as [$resolvedPath, $class]) {
                            if ($value->getClassName() === $class->getClassName()) {
                                return [$resolvedPath, $class];
                            }
                        }
                    }

                    /**
                     * @var JavaGenericClassInterface $value
                     */
                    try {
                        return $this->resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            new JavaClass($value),
                        ];
                    } catch (ClassNotFoundException $e) {
                    }
                    break;
            }
        }

        $className = Runtime::PHP_PACKAGES_DIRECTORY . '\\' . implode('\\', $buildClassPath);

        if (!class_exists($className)) {
            throw new ClassNotFoundException(
                str_replace(
                    [Runtime::PHP_PACKAGES_DIRECTORY . '\\', '\\'],
                    ['', '.'],
                    $className
                ) . ' class does not exist.'
            );
        }

        return [
            static::RESOLVED_TYPE_PACKAGES,
            $className,
        ];
    }

    public static function getClassPaths(): array
    {
        return static::$resolves;
    }

    public static function add($valuesOrResourceType = self::RESOURCE_TYPE_FILE, $value = null): void
    {
        if (is_array($valuesOrResourceType)) {
            foreach ($valuesOrResourceType as [$resourceType, $value]) {
                static::add($resourceType, $value);
            }
            return;
        }
        if (in_array([$valuesOrResourceType, $value], static::$resolves, true)) {
            return;
        }
        static::$resolves[] = [$valuesOrResourceType, $value];
    }

    public static function resolveNameByPath($path): string
    {
        $names = explode(
            '.',
            str_replace(
                [Runtime::PHP_PACKAGES_DIRECTORY . '\\', '\\'],
                ['', '.'],
                '\\' . ltrim(get_class($path))
            )
        );

        $string = [];

        foreach ($names as $name) {
            $string[] = array_flip(static::MAPS)[$name] ?? $name;
        }

        return implode('.', $string);
    }
}
