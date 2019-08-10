<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

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
        $result = PrintTool::getHeapspace();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }
}
