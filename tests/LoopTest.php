<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class LoopTest extends Base
{
    protected $fixtures = [
        'LoopTest',
    ];

    public function testCallCalculateByFor()
    {
        $calculatedValue = $this->initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call('calculateByFor', 10);
        $this->assertEquals(
            "45",
            (string) $calculatedValue
        );

        $calculatedValue = $this->initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call('calculateByFor', 20);
        $this->assertEquals(
            "190",
            (string) $calculatedValue
        );
    }

    public function testCallCalculateByWhile()
    {
        $calculatedValue = $this->initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call('calculateByWhile', 10);
        $this->assertEquals(
            "45",
            (string) $calculatedValue
        );

        $calculatedValue = $this->initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call('calculateByWhile', 20);
        $this->assertEquals(
            "190",
            (string) $calculatedValue
        );
    }
}
