<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class OuterClassTest extends Base
{
    protected $fixtures = [
        'OuterClassTestOuterClass',
        'OuterClassTest',
    ];

    public function testCallMain()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['OuterClassTest']
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