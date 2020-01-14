<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class CallMethodTest extends Base
{
    use JavaRunnable;

    public function testCallStaticMethodsWithNonArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function TestCallStaticMethodsWithArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsWithNonArgumentsAndNamespace()
    {
        [$output, $return] = $this->runJavaTest(
            __METHOD__,
            'PHPJava.CompilerMethodCallTest'
        );
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsWithArgumentsAndNamespace()
    {
        [$output, $return] = $this->runJavaTest(
            __METHOD__,
            'PHPJava.CompilerMethodCallTest'
        );
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsWithTypeHintedArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsWithPrimitiveTypeHintedArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('1234', $output[0]);
    }

    public function testCallStaticMethodsMultiplePattern1()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsMultiplePattern2()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallStaticMethodsWithMultipleArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }

    public function testCallDynamicMethodsWithNonArguments()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);
        $this->assertSame('Hello World!', $output[0]);
    }
}
