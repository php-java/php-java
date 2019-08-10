<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class ExtendingClassTest extends Base
{
    protected $fixtures = [
        'SuperExtendingClassTest',
        'ExtendingClassTest1',
        'ExtendingClassTest2',
    ];

    public function testExtendingClassPattern1()
    {
        static::$initiatedJavaClasses['ExtendingClassTest1']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("99999\n", $result);
    }

    public function testExtendingClassPattern2()
    {
        static::$initiatedJavaClasses['ExtendingClassTest2']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("12345\n", $result);
    }
}
