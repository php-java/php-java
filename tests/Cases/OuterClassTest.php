<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }
}
