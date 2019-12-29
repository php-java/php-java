<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\_Float;

class FloatCalculationTest extends Base
{
    protected $fixtures = [
        'FloatCalculationTest',
    ];

    private function call($name, ...$parameters)
    {
        return (string) static::$initiatedJavaClasses['FloatCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    public function testFloatAdd()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'floatAdd',
                _Float::get(10),
                _Float::get(20)
            )
        );
    }

    public function testFloatSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'floatSub',
                _Float::get(10),
                _Float::get(5)
            )
        );
    }

    public function testFloatNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'floatSub',
                _Float::get(10),
                _Float::get(20)
            )
        );
    }

    public function testFloatMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'floatMul',
                _Float::get(10),
                _Float::get(5)
            )
        );
    }

    public function testFloatAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'floatAddFromOtherMethod',
                _Float::get(10),
                _Float::get(20)
            )
        );
    }

    public function testFloatSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'floatSubFromOtherMethod',
                _Float::get(10),
                _Float::get(5)
            )
        );
    }

    public function testFloatNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'floatSubFromOtherMethod',
                _Float::get(10),
                _Float::get(20)
            )
        );
    }

    public function testFloatMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'floatMulFromOtherMethod',
                _Float::get(10),
                _Float::get(5)
            )
        );
    }

    public function testFloatPointAdd()
    {
        $this->assertEquals(
            '3',
            $this->call(
                'floatAdd',
                _Float::get(1.5),
                _Float::get(1.5)
            )
        );
    }

    public function testFloatPointSub()
    {
        $this->assertEquals(
            '0',
            $this->call(
                'floatSub',
                _Float::get(1.5),
                _Float::get(1.5)
            )
        );
    }

    public function testFloatNegativePointSub()
    {
        $this->assertEquals(
            '-1',
            $this->call(
                'floatSub',
                _Float::get(1.5),
                _Float::get(2.5)
            )
        );
    }

    public function testFloatPointMul()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'floatMul',
                _Float::get(5),
                _Float::get(1.5)
            )
        );
    }

    public function testFloatPointAddFromOtherMethod()
    {
        $this->assertEquals(
            '3',
            $this->call(
                'floatAddFromOtherMethod',
                _Float::get(1.5),
                _Float::get(1.5)
            )
        );
    }

    public function testFloatPointSubFromOtherMethod()
    {
        $this->assertEquals(
            '0',
            $this->call(
                'floatSubFromOtherMethod',
                _Float::get(1.5),
                _Float::get(1.5)
            )
        );
    }

    public function testFloatNegativePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '-1',
            $this->call(
                'floatSubFromOtherMethod',
                _Float::get(1.5),
                _Float::get(2.5)
            )
        );
    }

    public function testFloatMulPointFromOtherMethod()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'floatMulFromOtherMethod',
                _Float::get(5),
                _Float::get(1.5)
            )
        );
    }
}
