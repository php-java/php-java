<?php
namespace PHPJava\Tests;

class DefaultSyntaxInInterfaceTest extends Base
{
    protected $fixtures = [
        'DefaultSyntaxInInterfaceTest',
        'DefaultInterfaceCallsInterfaceMethodTest',
        'DefaultInterfaceGetCalledByMethodLookupTest',
    ];

    public function testDefaultInterfaceMethod1()
    {
        ob_start();
        static::$initiatedJavaClasses['DefaultSyntaxInInterfaceTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'defaultInterfaceMethodTest1'
            );
        $result = ob_get_clean();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }

    public function testDefaultInterfaceCallsInterfaceMethod()
    {
        ob_start();
        static::$initiatedJavaClasses['DefaultInterfaceCallsInterfaceMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }

    public function DefaultInterfaceGetCalledByMethodLookupTest()
    {
        ob_start();
        static::$initiatedJavaClasses['DefaultInterfaceGetCalledByMethodLookupTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();

        $this->assertEquals(
            "Hello World!\n",
            $result
        );
    }
}
