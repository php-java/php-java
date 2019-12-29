<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class LoopTest extends Base
{
    protected $fixtures = [
        'LoopTest',
    ];

    public function testCallCalculateByFor()
    {
        $calculatedValue = static::$initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('calculateByFor', 10);
        $this->assertEquals(
            '45',
            (string) $calculatedValue
        );

        $calculatedValue = static::$initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('calculateByFor', 20);
        $this->assertEquals(
            '190',
            (string) $calculatedValue
        );
    }

    public function testCallCalculateByWhile()
    {
        $calculatedValue = static::$initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('calculateByWhile', 10);
        $this->assertEquals(
            '45',
            (string) $calculatedValue
        );

        $calculatedValue = static::$initiatedJavaClasses['LoopTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('calculateByWhile', 20);
        $this->assertEquals(
            '190',
            (string) $calculatedValue
        );
    }
}
