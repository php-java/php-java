<?php
namespace PHPJava\Tests;

use PHPJava\Kernel\Types\_Float;

class FloatOfTypesComparingTest extends Base
{
    protected $fixtures = [
        'FloatOfTypesComparingTest',
    ];

    public function testLessThan()
    {
        ob_start();
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'l',
                new _Float(-1.0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testLessThanAndEquals()
    {
        ob_start();
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'le',
                new _Float(0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThan()
    {
        ob_start();
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'g',
                new _Float(2.0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThanAndEquals()
    {
        ob_start();
        static::$initiatedJavaClasses['FloatOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ge',
                new _Float(0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }
}
