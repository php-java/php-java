<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

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
        $result = PrintTool::getHeapspace();

        $this->assertEquals('Hello World', $result);
    }
}
