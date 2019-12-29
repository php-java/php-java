<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

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
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
