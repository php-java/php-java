<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Types\_Double;

class DoubleOfTypesComparingTest extends Base
{
    protected $fixtures = [
        'DoubleOfTypesComparingTest',
    ];

    public function testLessThan()
    {
        static::$initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'l',
                new _Double(-1.0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testLessThanAndEquals()
    {
        static::$initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'le',
                new _Double(0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThan()
    {
        static::$initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'g',
                new _Double(2.0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThanAndEquals()
    {
        static::$initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ge',
                new _Double(0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
