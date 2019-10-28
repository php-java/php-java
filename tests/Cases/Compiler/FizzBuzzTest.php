<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Tests\Cases\Base;

class FizzBuzzTest extends Base
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

    private function runJavaTest(string $testName): array
    {
        $name = $this->getClassNameByTestName($testName);
        (new PackageAssembler($this->getFileStream($name)))
            ->assemble();

        exec(
            'cd ' . $this->getDistributeDirectory() . ' && java ' . $name,
            $output,
            $return
        );

        return [$output, $return];
    }

    public function testFizzBuzz()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertEquals(
            file_get_contents(__DIR__ . '/../templates/FizzBuzzTest.txt'),
            implode("\n", $output) . "\n"
        );
    }
}
