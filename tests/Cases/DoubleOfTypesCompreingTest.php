<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Types\Double_;

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
                new Double_(-1.0)
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
                new Double_(0)
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
                new Double_(2.0)
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
                new Double_(0)
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
