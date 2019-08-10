<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class InnerClassTest extends Base
{
    protected $fixtures = [
        'InnerClassTest',
    ];

    public function testCallMainHavingStringArguments()
    {
        // call main
        static::$initiatedJavaClasses['InnerClassTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['Hello', 'World']
            );
        $result = Output::getHeapspace();

        $this->assertEquals('Hello World', $result);
    }
}
