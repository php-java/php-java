<?php
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

    public function testCallStaticMethodsWithWithArguments()
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

    public function testCallStaticMethodsWithWithArgumentsAndNamespace()
    {
        [$output, $return] = $this->runJavaTest(
            __METHOD__,
            'PHPJava.CompilerMethodCallTest'
        );
        $this->assertSame('Hello World!', $output[0]);
    }
}
