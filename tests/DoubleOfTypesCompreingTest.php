<?php
namespace PHPJava\Tests;

use PHPJava\Kernel\Types\_Double;

class DoubleOfTypesComparingTest extends Base
{
    protected $fixtures = [
        'DoubleOfTypesComparingTest',
    ];

    public function testLessThan()
    {
        ob_start();
        $this->initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'l',
                new _Double(-1.0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testLessThanAndEquals()
    {
        ob_start();
        $this->initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'le',
                new _Double(0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }


    public function testGraterThan()
    {
        ob_start();
        $this->initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'g',
                new _Double(2.0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testGraterThanAndEquals()
    {
        ob_start();
        $this->initiatedJavaClasses['DoubleOfTypesComparingTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ge',
                new _Double(0)
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

}
