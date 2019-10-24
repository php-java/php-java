<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Tests\Cases\Base;

class IfStatementTest extends Base
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

    public function testIfStatementAvailableIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World!', $output[0]);
        $this->assertSame('Hello World!', $output[1]);
    }

    public function testIfStatementNotAvailableIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(0, $output);
    }

    public function testIfElseIfStatementAvailableIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World!', $output[0]);
        $this->assertSame('Hello World!', $output[1]);
    }

    public function testIfElseIfStatementAvailableElseIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 2', $output[0]);
        $this->assertSame('Hello World 2', $output[1]);
    }

    public function testIfElseStatementAvailableIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 1', $output[0]);
        $this->assertSame('Hello World 1', $output[1]);
    }

    public function testIfElseStatementAvailableElse()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 2', $output[0]);
        $this->assertSame('Hello World 2', $output[1]);
    }

    public function testIfElseIfElseStatementAvailableIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 1', $output[0]);
        $this->assertSame('Hello World 1', $output[1]);
    }

    public function testIfElseIfElseStatementAvailableElseIf()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 2', $output[0]);
        $this->assertSame('Hello World 2', $output[1]);
    }

    public function testIfElseIfElseStatementAvailableElse()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertCount(2, $output);

        $this->assertSame('Hello World 3', $output[0]);
        $this->assertSame('Hello World 3', $output[1]);
    }
}
