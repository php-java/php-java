<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

class AccessStaticMethodTest extends Base
{
    protected $fixtures = [
        'AccessStaticMethodTest',
    ];

    public function testCallMainHavingStringArguments()
    {
        // call main
        static::$initiatedJavaClasses['AccessStaticMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['Hello', 'World']
            );
        $result = PrintTool::getHeapspace();

        $this->assertEquals('HelloWorld', $result);
    }

    public function testCallMainHavingIntegerArguments()
    {
        // call main
        static::$initiatedJavaClasses['AccessStaticMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                [1234, 5678]
            );
        $result = PrintTool::getHeapspace();

        $this->assertEquals(246811356, $result);
    }

    public function testCallReturnTest()
    {
        // call main
        $result = static::$initiatedJavaClasses['AccessStaticMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('returnTest');

        $this->assertEquals('Return Test.', $result);
    }
}
