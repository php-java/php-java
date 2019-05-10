<?php
namespace PHPJava\Tests;

class InnerClassTest extends Base
{
    protected $fixtures = [
        'InnerClassTest',
    ];

    public function testCallMainHavingStringArguments()
    {
        ob_start();
        // call main
        $this->initiatedJavaClasses['InnerClassTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['Hello', 'World']
            );
        $result = ob_get_clean();

        $this->assertEquals('Hello World', $result);
    }
}
