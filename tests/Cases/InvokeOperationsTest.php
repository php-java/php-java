<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

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
        $getHelloWorld = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $getHelloWorld);
    }
}
