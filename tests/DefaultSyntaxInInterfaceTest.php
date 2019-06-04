<?php
namespace PHPJava\Tests;

class DefaultSyntaxInInterfaceTest extends Base
{
    protected $fixtures = [
        'DefaultSyntaxInInterfaceTest',
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
}
