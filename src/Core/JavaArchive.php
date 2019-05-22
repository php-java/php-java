<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\Stream\Reader\InlineReader;
use PHPJava\Exceptions\UndefinedEntrypointException;
use PHPJava\Kernel\Internal\JavaClassDeferredLoader;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Resolvers\FileTypeResolver;
use PHPJava\Packages\java\io\FileNotFoundException;
use PHPJava\Packages\java\lang\ClassNotFoundException;
use PHPJava\Utilities\DebugTool;

class JavaArchive
{
    const MANIFEST_FILE_NAME = 'META-INF/MANIFEST.MF';
    const DEFAULT_ENTRYPOINT_NAME = 'main';
    const IGNORE_FILES = [
        'META-INF/main.kotlin_module',
    ];

    /**
     * @var ?string[]
     */
    private $manifestData = [];

    /**
     * @var string
     */
    private $jarFile;

    /**
     * @var \ZipArchive
     */
    private $expandedHArchive;

    /**
     * @var string[]
     */
    private $files = [];

    /**
     * @var JavaClassInterface
     */
    private $classes = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var DebugTool
     */
    private $debugTool;

    /**
     * @var float
     */
    private $startTime = 0.0;

    /**
     * @throws FileNotFoundException
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\ValidatorException
     * @throws \PHPJava\Packages\java\lang\ClassNotFoundException
     */
    public function __construct(string $jarFile, array $options = [])
    {
        $this->startTime = microtime(true);
        $this->jarFile = $jarFile;
        $archive = new \ZipArchive();
        $archive->open($jarFile);
        $this->expandedHArchive = $archive;
        $this->options = $options;
        $this->debugTool = new DebugTool(
            basename($jarFile),
            $this->options
        );

        $this->debugTool->getLogger()->info('Start jar emulation');

        $this->manifestData['main-class'] = $options['entrypoint'] ?? Runtime::ENTRYPOINT;

        if (!(($this->options['class_resolver'] ?? null) instanceof ClassResolver)) {
            $this->options['class_resolver'] = new ClassResolver(
                $this->options
            );
        }
        // Add resolving path
        $this->options['class_resolver']->add(
            [
                [ClassResolver::RESOURCE_TYPE_FILE, dirname($jarFile)],
                [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
                [ClassResolver::RESOURCE_TYPE_JAR, $this],
            ]
        );

        $this->debugTool->getLogger()->debug('Extracting jar files: ' . $this->expandedHArchive->numFiles);
        for ($i = 0; $i < $this->expandedHArchive->numFiles; $i++) {
            $name = $archive->getNameIndex($i);
            if ($name[strlen($name) - 1] === '/') {
                continue;
            }
            $fileName = preg_replace('/\.class$/', '', $name);
            $this->files[$fileName] = $archive->getFromIndex($i);
        }

        if (!isset($this->files[static::MANIFEST_FILE_NAME])) {
            throw new FileNotFoundException('Failed to load Manifest.mf');
        }

        foreach (explode("\n", $this->files[static::MANIFEST_FILE_NAME]) as $attribute) {
            $attribute = str_replace(["\r", "\n"], '', $attribute);
            if (empty($attribute)) {
                continue;
            }
            [$name, $value] = explode(':', $attribute);
            $this->manifestData[strtolower($name)] = trim($value);
        }

        $this->files = array_filter(
            $this->files,
            function ($fileName) {
                return $fileName !== static::MANIFEST_FILE_NAME;
            },
            ARRAY_FILTER_USE_KEY
        );

        foreach ($this->files as $className => $code) {
            if (in_array($className, static::IGNORE_FILES)) {
                continue;
            }
            $classPath = str_replace('/', '.', $className);
            $this->classes[$classPath] = new JavaClassDeferredLoader(
                InlineReader::class,
                [$className, $code],
                $this->options
            );
        }

        $currentDirectory = getcwd();
        foreach ($this->getClassPaths() as $classPath) {
            $resolvePath = $classPath[0] === '/' ? $classPath : ($currentDirectory . '/' . $classPath);
            $realpath = realpath($resolvePath);
            if ($realpath === false) {
                throw new FileNotFoundException($classPath . ' does not exist.');
            }

            $value = $realpath;

            switch ($fileType = FileTypeResolver::resolve($resolvePath)) {
                case ClassResolver::RESOLVED_TYPE_CLASS:
                    $value = new Stream\Reader\FileReader($value);
                    break;
                case ClassResolver::RESOURCE_TYPE_JAR:
                    $value = new JavaArchive($value, $this->options);
                    break;
                case ClassResolver::RESOURCE_TYPE_FILE:
                    break;
            }
            $this->options['class_resolver']->add($fileType, $value);
        }

        $this->debugTool->getLogger()->info('End of jar');
    }

    public function __destruct()
    {
        $this->debugTool->getLogger()->info(
            'Spent time: ' . (microtime(true) - $this->startTime) . ' sec.'
        );
    }

    /**
     * @throws ClassNotFoundException
     * @throws UndefinedEntrypointException
     */
    public function execute(...$arguments)
    {
        $this->debugTool->getLogger()->info('Call to entrypoint: ' . $this->getEntryPointName());
        if ($this->getEntryPointName() === null) {
            throw new UndefinedEntrypointException('No entrypoint.');
        }
        return $this
            ->getClassByName($this->getEntryPointName())
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                static::DEFAULT_ENTRYPOINT_NAME,
                ...$arguments
            );
    }

    /**
     * @return mixed[]
     */
    public function __debugInfo()
    {
        return [
            'version' => $this->getVersion(),
            'createdBy' => $this->getCreatedBy(),
            'entryPointName' => $this->getEntryPointName(),
            'file' => $this->jarFile,
            'classes' => $this->getClasses(),
            'classPaths' => $this->getClassPaths(),
        ];
    }

    public function getVersion(): ?string
    {
        return $this->manifestData['manifest-version'] ?? null;
    }

    public function getCreatedBy(): ?string
    {
        return $this->manifestData['created-by'] ?? null;
    }

    public function getEntryPointName(): ?string
    {
        return $this->manifestData['main-class'] ?? null;
    }

    /**
     * @return string[]
     */
    public function getClassPaths(): array
    {
        $classPaths = [];
        foreach (explode(' ', $this->manifestData['class-path'] ?? '') as $path) {
            if (empty($path)) {
                continue;
            }
            $classPaths[] = $path;
        }
        return $classPaths;
    }

    /**
     * @return JavaClassInterface[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    public function getClassByName(string $name): JavaClassInterface
    {
        $name = str_replace('/', '.', $name);
        if (!isset($this->classes[$name])) {
            throw new ClassNotFoundException($name . ' does not exist on ' . $this->jarFile . '.');
        }
        return $this->classes[$name];
    }
}
