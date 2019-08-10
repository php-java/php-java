<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $result = StandardIO::getHeapspace();

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
        $result = StandardIO::getHeapspace();

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
