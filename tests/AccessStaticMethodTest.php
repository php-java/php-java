<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class AccessStaticMethodTest extends Base
{
    protected $fixtures = [
        'AccessStaticMethodTest',
    ];

    public function testCallMainHavingStringArguments()
    {
        ob_start();
        // call main
        $this->initiatedJavaClasses['AccessStaticMethodTest']
            ->getInvoker()
            ->getStaticMethods()
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
        $this->initiatedJavaClasses['AccessStaticMethodTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'main',
                [1234, 5678]
            );
        $result = ob_get_clean();

        $this->assertEquals(246811356, $result);
    }
}
