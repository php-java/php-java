<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

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
        $result = PrintTool::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
