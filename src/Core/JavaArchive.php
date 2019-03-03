<?php
namespace PHPJava\Core;

use PHPJava\Exceptions\UndefinedEntrypointException;
use PHPJava\Imitation\java\io\FileNotFoundException;
use PHPJava\Imitation\java\lang\ClassNotFoundException;
use PHPJava\Utilities\ClassResolver;

class JavaArchive
{
    const MANIFEST_FILE_NAME = 'META-INF/MANIFEST.MF';
    const DEFAULT_ENTRYPOINT_NAME = 'main';

    private $manifestData = [];
    private $jarFile;
    private $expandedHArchive;
    private $files = [];
    private $classes = [];

    /**
     * @param string $jarFile
     * @param string|null $entryPoint
     * @throws FileNotFoundException
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\ValidatorException
     * @throws \PHPJava\Imitation\java\lang\ClassNotFoundException
     */
    public function __construct(string $jarFile, string $entryPoint = null)
    {
        $this->jarFile = $jarFile;
        $archive = new \ZipArchive();
        $archive->open($jarFile);
        $this->expandedHArchive = $archive;

        // Add resolving path
        ClassResolver::add(
            [
                [ClassResolver::RESOURCE_TYPE_FILE, dirname($jarFile)],
                [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
                [ClassResolver::RESOURCE_TYPE_JAR, $this],
            ]
        );

        for ($i = 0; $i < $this->expandedHArchive->numFiles; $i++) {
            $name = $archive->getNameIndex($i);
            if ($name[strlen($name) - 1] === '/') {
                continue;
            }
            $this->files[preg_replace('/\.class$/', '', $name)] = $archive->getFromIndex($i);
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
            $this->classes[str_replace('/', '.', $className)] = new JavaClass(new JavaClassInlineReaderInterface(
                $className,
                $code
            ));
        }
    }

    /**
     * @return mixed
     * @throws ClassNotFoundException
     * @throws UndefinedEntrypointException
     */
    public function execute()
    {
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
                []
            );
    }

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

    public function getClassPaths(): array
    {
        $classPaths = [];
        foreach (explode(' ', $this->manifestData['class-path'] ?? []) as $path) {
            if (empty($path)) {
                continue;
            }
            $classPaths[] = $path;
        }
        return $classPaths;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

    public function getClassByName(string $name): JavaClass
    {
        if (!isset($this->classes[$name])) {
            throw new ClassNotFoundException(str_replace('/', '.', $name) . ' does not found on ' . $this->jarFile . '.');
        }
        return $this->classes[$name];
    }
}
