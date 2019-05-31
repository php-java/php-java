<?php
namespace PHPJava\Tests;

class LambdaSyntaxTest extends Base
{
    protected $fixtures = [
        'LambdaSyntaxTest',
    ];

    private function call($method)
    {
        static::$initiatedJavaClasses['LambdaSyntaxTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method);
    }

    public function testParameterWithLambdaSyntax()
    {
        ob_start();
        $this->call(
            'testParameterWithLambdaSyntax'
        );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }
}
