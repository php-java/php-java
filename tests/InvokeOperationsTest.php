<?php
namespace PHPJava\Tests;

class InvokeOperationsTest extends Base
{
    protected $fixtures = [
        'InvokeDynamicTest',
    ];

    public function testInvokeInterface()
    {
        ob_start();
        $this->initiatedJavaClasses['InvokeDynamicTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $getHelloWorld = ob_get_clean();
        $this->assertEquals("Hello World!\n", $getHelloWorld);
    }
}
