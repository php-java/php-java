<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

class InvokeOperationsTest extends Base
{
    protected $fixtures = [
        'InvokeDynamicTest',
    ];

    public function testInvokeInterface()
    {
        static::$initiatedJavaClasses['InvokeDynamicTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $getHelloWorld = PrintTool::getHeapspace();
        $this->assertEquals("Hello World!\n", $getHelloWorld);
    }
}
