<?php
namespace PHPJava\Core;

use PHPJava\Imitation\java\io\FileNotFoundException;

class JavaArchive
{
    const MANIFEST_FILE_NAME = 'META-INF/MANIFEST.MF';

    private $manifestData = [];
    private $jarFile;
    private $expandedHArchive;
    private $files = [];
    private $classes = [];

    public function __construct(string $jarFile)
    {
        $this->jarFile = $jarFile;
        $archive = new \ZipArchive();
        $archive->open($jarFile);
        $this->expandedHArchive = $archive;
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
            $this->classes[$className] = new JavaClass(new JavaClassInlineFileReader(
                $className,
                $code
            ));
        }

        var_dump($this->classes);
    }

    public function __debugInfo()
    {
        return [
            'version' => $this->getVersion(),
            'createdBy' => $this->getCreatedBy(),
            'entrypoint' => $this->getEntryPoint(),
            'file' => $this->jarFile,
        ];
    }

    public function getVersion()
    {
        return $this->manifestData['manifest-version'] ?? null;
    }

    public function getCreatedBy()
    {
        return $this->manifestData['created-by'] ?? null;
    }

    public function getEntryPoint()
    {
        return $this->manifestData['main-class'] ?? null;
    }
}
