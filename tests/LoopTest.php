<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class LoopTest extends Base
{
    protected $fixtures = [
        'LoopTest',
    ];

    /**
     * @var \PHPJava\Core\JavaClass
     */
    private $javaClass;

    public function setUp(): void
    {
        parent::setUp();

        $this->javaClass = new \PHPJava\Core\JavaClass(
            new \PHPJava\Core\JavaClassReader($this->getClassName('LoopTest'))
        );
    }

    public function testCallCalculateByFor()
    {
        $calculatedValue = $this->javaClass->getInvoker()->getStaticMethods()->call('calculateByFor', 10);
        $this->assertEquals(
            "45",
            (string) $calculatedValue
        );

        $calculatedValue = $this->javaClass->getInvoker()->getStaticMethods()->call('calculateByFor', 20);
        $this->assertEquals(
            "190",
            (string) $calculatedValue
        );
    }

    public function testCallCalculateByWhile()
    {
        $calculatedValue = $this->javaClass->getInvoker()->getStaticMethods()->call('calculateByWhile', 10);
        $this->assertEquals(
            "45",
            (string) $calculatedValue
        );

        $calculatedValue = $this->javaClass->getInvoker()->getStaticMethods()->call('calculateByWhile', 20);
        $this->assertEquals(
            "190",
            (string) $calculatedValue
        );
    }
}
