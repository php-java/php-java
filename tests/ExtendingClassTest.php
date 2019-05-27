<?php
namespace PHPJava\Tests;

class ExtendingClassTest extends Base
{
    protected $fixtures = [
        'SuperExtendingClassTest',
        'ExtendingClassTest1',
        'ExtendingClassTest2',
    ];

    public function testExtendingClassPattern1()
    {
        ob_start();
        $this->initiatedJavaClasses['ExtendingClassTest1']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("99999\n", $result);
    }

    public function testExtendingClassPattern2()
    {
        ob_start();
        $this->initiatedJavaClasses['ExtendingClassTest2']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("12345\n", $result);
    }
}
