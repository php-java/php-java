<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaArchive;
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Imitation\java\lang\ClassNotFoundException;

class ClassResolver
{
    const MAPS = Runtime::PHP_IMITATION_MAPS;

    // resource types
    const RESOURCE_TYPE_FILE = 'RESOURCE_TYPE_FILE';
    const RESOURCE_TYPE_JAR = 'RESOURCE_TYPE_JAR';
    const RESOURCE_TYPE_CLASS = 'RESOURCE_TYPE_CLASS';

    // resolved types
    const RESOLVED_TYPE_CLASS = 'RESOLVED_TYPE_CLASS';
    const RESOLVED_TYPE_IMITATION = 'RESOLVED_TYPE_IMITATION';

    private $resolves = [];
    private $resolvedPaths = [];
    private $options = [];

    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function resolve(string $javaPath, JavaClass $class = null): array
    {
        $namespaces = explode('.', str_replace('/', '.', $javaPath));
        $buildClassPath = [];
        foreach ($namespaces as $namespace) {
            $buildClassPath[] = static::MAPS[$namespace] ?? $namespace;
        }

        // resolve something approaching
        $relativePath = implode('/', $namespaces);
        foreach ($this->resolves as [$resourceType, $value]) {
            switch ($resourceType) {
                case static::RESOURCE_TYPE_FILE:
                    $path = realpath($value . '/' . $relativePath . '.class');
                    if (($key = array_search($path, $this->resolvedPaths, true)) !== false) {
                        return $this->resolvedPaths[$key];
                    }
                    if (is_file($path)) {
                        $initiatedClass = new JavaClass(
                            new FileReader($path),
                            $this->options
                        );
                        if (strpos($relativePath, '$') !== false && $class !== null) {
                            $initiatedClass->setParentClass($class);
                        }
                        return $this->resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            $initiatedClass,
                        ];
                    }
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
                case static::RESOLVED_TYPE_CLASS:
                    /**
                     * @var ReaderInterface $value
                     */
                    try {
                        return $this->resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            new JavaClass(
                                $value,
                                $this->options
                            ),
                        ];
                    } catch (ClassNotFoundException $e) {
                    }
                    break;
            }
        }

        $className = Runtime::PHP_IMITATION_DIRECTORY . '\\' . implode('\\', $buildClassPath);

        if (!class_exists($className)) {
            throw new ClassNotFoundException(
                str_replace(
                    [Runtime::PHP_IMITATION_DIRECTORY . '\\', '\\'],
                    ['', '.'],
                    $className
                ) . ' class does not exist.'
            );
        }

        return [
            static::RESOLVED_TYPE_IMITATION,
            $className,
        ];
    }

    public function add($valuesOrResourceType = self::RESOURCE_TYPE_FILE, $value = null): void
    {
        if (is_array($valuesOrResourceType)) {
            foreach ($valuesOrResourceType as [$resourceType, $value]) {
                $this->add($resourceType, $value);
            }
            return;
        }
        if (in_array([$valuesOrResourceType, $value], $this->resolves, true)) {
            return;
        }
        $this->resolves[] = [$valuesOrResourceType, $value];
    }

    public static function resolveNameByPath($path)
    {
        $names = explode(
            '.',
            str_replace(
                [Runtime::PHP_IMITATION_DIRECTORY . '\\', '\\'],
                ['', '.'],
                get_class($path)
            )
        );

        $string = [];

        foreach ($names as $name) {
            $string[] = array_flip(static::MAPS)[$name] ?? $name;
        }

        return implode('.', $string);
    }
}
