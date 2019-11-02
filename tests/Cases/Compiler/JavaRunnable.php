<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

trait JavaRunnable
{
    private function getDistributeDirectory(): string
    {
        return __DIR__ . '/../caches/compiler';
    }

    private function getClassNameByTestName(string $name): string
    {
        return ucfirst(explode('::', $name)[1]);
    }

    private function getFileStream(string $className): StreamReaderInterface
    {
        return (new FileStream(__DIR__ . '/Codes/' . $className . '.php'))
            ->setDistributeDirectory($this->getDistributeDirectory());
    }

    private function runJavaTest(string $testName, ?string $namespace = null): array
    {
        $name = $this->getClassNameByTestName($testName);
        (new PackageAssembler($this->getFileStream($name)))
            ->assemble();

        $classPath = ltrim(($namespace ?? '') . '.' . $name, '.');
        exec(
            'cd ' . $this->getDistributeDirectory() . ' && java ' . $classPath,
            $output,
            $return
        );

        return [$output, $return];
    }
}
