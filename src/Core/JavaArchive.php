<?php
namespace PHPJava\Core;

use PHPJava\Imitation\java\io\FileNotFoundException;

class JavaArchive
{
    private $manifestData = [];
    private $jarFile;
    private $expandedHArchive;
    private $files = [];

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
            $this->files[$archive->getNameIndex($i)] = $archive->getFromIndex($i);
        }

        if (!isset($this->files['META-INF/MANIFEST.MF'])) {
            throw new FileNotFoundException('Failed to load Manifest.mf');
        }

        foreach (explode("\n", $this->files['META-INF/MANIFEST.MF']) as $attribute) {
            $attribute = str_replace(["\r", "\n"], '', $attribute);
            if (empty($attribute)) {
                continue;
            }
            [$name, $value] = explode(':', $attribute);
            $this->manifestData[strtolower($name)] = trim($value);
        }
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
