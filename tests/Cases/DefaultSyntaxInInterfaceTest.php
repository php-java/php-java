<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class DefaultSyntaxInInterfaceTest extends Base
{
    protected $fixtures = [
        'DefaultSyntaxInInterfaceTest',
        'DefaultInterfaceCallsInterfaceMethodTest',
        'DefaultInterfaceGetCalledByMethodLookupTest',
    ];

    public function testDefaultInterfaceMethod1()
    {
        static::$initiatedJavaClasses['DefaultSyntaxInInterfaceTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'defaultInterfaceMethodTest1'
            );
        $result = Output::getHeapspace();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }

    public function testDefaultInterfaceCallsInterfaceMethod()
    {
        static::$initiatedJavaClasses['DefaultInterfaceCallsInterfaceMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }

    public function DefaultInterfaceGetCalledByMethodLookupTest()
    {
        static::$initiatedJavaClasses['DefaultInterfaceGetCalledByMethodLookupTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }
}
