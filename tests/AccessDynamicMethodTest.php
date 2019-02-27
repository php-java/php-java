<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class AccessDynamicMethodTest extends Base
{
    protected $fixtures = [
        'AccessDynamicMethodTest',
    ];

    public function testCallMainHavingStringArguments()
    {
        ob_start();
        // call main
        $this->initiatedJavaClasses['AccessDynamicMethodTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getMethods()
            ->call(
                'main',
                ["Hello", "World"]
            );
        $result = ob_get_clean();

        $this->assertEquals("HelloWorld", $result);
    }

    public function testCallMainHavingIntegerArguments()
    {
        ob_start();
        // call main
        $this->initiatedJavaClasses['AccessDynamicMethodTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getMethods()
            ->call(
                'main',
                [1234, 5678]
            );
        $result = ob_get_clean();

        $this->assertEquals(246811356, $result);
    }

    public function testCallReturnTest()
    {
        // call main
        $result = $this->initiatedJavaClasses['AccessDynamicMethodTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getMethods()
            ->call('returnTest');

        $this->assertEquals('Return Test.', $result);
    }
}
