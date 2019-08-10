<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $this->call(
            'testParameterWithLambdaSyntax'
        );
        $result = StandardIO::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
