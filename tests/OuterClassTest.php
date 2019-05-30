<?php
namespace PHPJava\Tests;

class OuterClassTest extends Base
{
    protected $fixtures = [
        'OuterClassTestOuterClass',
        'OuterClassTest',
    ];

    public function testCallMain()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['OuterClassTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }
}
