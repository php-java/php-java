<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $result = StandardIO::getHeapspace();

        $this->assertEquals('Hello World', $result);
    }
}
