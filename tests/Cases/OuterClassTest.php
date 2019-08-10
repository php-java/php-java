<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class OuterClassTest extends Base
{
    protected $fixtures = [
        'OuterClassTestOuterClass',
        'OuterClassTest',
    ];

    public function testCallMain()
    {
        $calculatedValue = static::$initiatedJavaClasses['OuterClassTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }
}
