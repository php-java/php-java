<?php
namespace PHPJava\Tests\Packages;

use PHPJava\Tests\Base;

class JavaLangMathTest extends Base
{
    protected $fixtures = [
        'JavaLangMathTest',
    ];

    public function testAbs()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'abs',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.5, $value);
    }

    public function testAcos()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'acos',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(1.0471975511966, $value);
    }

    public function testAddExact()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'addExact',
                1,
                2
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(3, $value);
    }

    public function testAsin()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'asin',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.5235987755983, $value);
    }

    public function testAtan()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'atan',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.46364760900081, $value);
    }

    public function testAtan2()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'atan2',
                1.0,
                2.0
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.46364760900081, $value);
    }

    public function testCbrt()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'cbrt',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.7937005259841, $value);
    }

    public function testCeil()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ceil',
                0.5
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1, $value);
    }

    public function testCopySign()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'copySign',
                0.5,
                1.0
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.5, $value);
    }

    public function testCos()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'cos',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.87758256189037, $value);
    }

    public function testCosh()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'cosh',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(1.1276259652064, $value);
    }

    public function testDecrementExact()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'decrementExact',
                1234
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1233, $value);
    }

    public function testExp()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'exp',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(1.6487212707001, $value);
    }

    public function testExpm1()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'expm1',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.64872127070013, $value);
    }

    public function testFloor()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'floor',
                0.5
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(0, $value);
    }

    // TODO: Java 9
    // public function testFloorDiv()
    // {
    //     ob_start();
    //     static::$initiatedJavaClasses['JavaLangMathTest']
    //         ->getInvoker()
    //         ->getStatic()
    //         ->getMethods()
    //         ->call(
    //             'floorDiv',
    //             -4,
    //             3
    //         );
    //     $value = (int) ob_get_clean();
    //     $this->assertEquals(-2, $value);
    // }

    // TODO: Java 9
    // public function testFloorMod()
    // {
    //     ob_start();
    //     static::$initiatedJavaClasses['JavaLangMathTest']
    //         ->getInvoker()
    //         ->getStatic()
    //         ->getMethods()
    //         ->call(
    //             'floorMod',
    //             4,
    //             -3
    //         );
    //     $value = (int) ob_get_clean();
    //     $this->assertEquals(-2, $value);
    // }

    public function testIncrementExact()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'incrementExact',
                1234
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1235, $value);
    }

    public function testLog()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'log',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(-0.69314718055995, $value);
    }

    public function testLog10()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'log10',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(-0.30102999566398, $value);
    }

    public function testLog1p()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'log1p',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.40546510810816, $value);
    }

    public function testMax()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'max',
                1234,
                5678
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(5678, $value);
    }

    public function testMin()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'min',
                1234,
                5678
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1234, $value);
    }

    // TODO: Java 9
    // public function testMultiplyExact()
    // {
    //     ob_start();
    //     static::$initiatedJavaClasses['JavaLangMathTest']
    //         ->getInvoker()
    //         ->getStatic()
    //         ->getMethods()
    //         ->call(
    //             'multiplyExact',
    //             1234,
    //             5678
    //         );
    //     $value = (int) ob_get_clean();
    //     $this->assertEquals(7006652, $value);
    // }

    // TODO: Java 9
    // public function testMultiplyFull()
    // {
    //     ob_start();
    //     static::$initiatedJavaClasses['JavaLangMathTest']
    //         ->getInvoker()
    //         ->getStatic()
    //         ->getMethods()
    //         ->call(
    //             'multiplyFull',
    //             1234,
    //             5678
    //         );
    //     $value = (int) ob_get_clean();
    //     $this->assertEquals(7006652, $value);
    // }

    public function testPow()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'pow',
                1234,
                3
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1879080904, $value);
    }

    public function testRandom()
    {
        mt_srand(1234);

        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'random'
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.19151945001982, $value);
    }

    public function testRound()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'round',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(1.0, $value);
    }

    public function testSin()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'sin',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.4794255386042, $value);
    }

    public function testSinh()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'sinh',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.52109530549375, $value);
    }

    public function testSqrt()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'sqrt',
                4.0
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(2.0, $value);
    }

    public function testSubtractExact()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'subtractExact',
                5678,
                1234
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(4444, $value);
    }

    public function testTan()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'tan',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.54630248984379, $value);
    }

    public function testTanh()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'tanh',
                0.5
            );
        $value = (float) ob_get_clean();
        $this->assertEquals(0.46211715726001, $value);
    }
}
