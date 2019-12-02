<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Core\JVM\Parameters\Runtime;

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
        return $this->runJavaWithClassFileNameTest(
            $testName,
            null,
            $namespace
        );
    }

    private function runJavaEntryPointTest(string $testName, ?string $namespace = null): array
    {
        return $this->runJavaWithClassFileNameTest(
            $testName,
            Runtime::PHP_ENTRY_POINT_CLASS_NAME,
            $namespace
        );
    }

    private function runJavaWithClassFileNameTest(string $testName, string $classFileName = null, ?string $namespace = null)
    {
        $name = $this->getClassNameByTestName($testName);
        (new PackageAssembler($this->getFileStream($name)))
            ->assemble();

        $classPath = ltrim(($namespace ?? '') . '.' . ($classFileName ?? $name), '.');
        exec(
            'cd ' . $this->getDistributeDirectory() . ' && java ' . $classPath,
            $output,
            $return
        );

        return [$output, $return];
    }
}
