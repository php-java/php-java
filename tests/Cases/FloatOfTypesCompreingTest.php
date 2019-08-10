<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Types\_Float;

class FloatOfTypesComparingTest extends Base
{
    protected $fixtures = [
        'FloatOfTypesComparingTest',
    ];

    public function testLessThan()
    {
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'l',
                new _Float(-1.0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testLessThanAndEquals()
    {
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'le',
                new _Float(0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThan()
    {
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'g',
                new _Float(2.0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThanAndEquals()
    {
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ge',
                new _Float(0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
