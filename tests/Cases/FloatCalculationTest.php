<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Float_;

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
                Float_::get(10),
                Float_::get(20)
            )
        );
    }

    public function testFloatSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'floatSub',
                Float_::get(10),
                Float_::get(5)
            )
        );
    }

    public function testFloatNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'floatSub',
                Float_::get(10),
                Float_::get(20)
            )
        );
    }

    public function testFloatMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'floatMul',
                Float_::get(10),
                Float_::get(5)
            )
        );
    }

    public function testFloatAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'floatAddFromOtherMethod',
                Float_::get(10),
                Float_::get(20)
            )
        );
    }

    public function testFloatSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'floatSubFromOtherMethod',
                Float_::get(10),
                Float_::get(5)
            )
        );
    }

    public function testFloatNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'floatSubFromOtherMethod',
                Float_::get(10),
                Float_::get(20)
            )
        );
    }

    public function testFloatMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'floatMulFromOtherMethod',
                Float_::get(10),
                Float_::get(5)
            )
        );
    }

    public function testFloatPointAdd()
    {
        $this->assertEquals(
            '3',
            $this->call(
                'floatAdd',
                Float_::get(1.5),
                Float_::get(1.5)
            )
        );
    }

    public function testFloatPointSub()
    {
        $this->assertEquals(
            '0',
            $this->call(
                'floatSub',
                Float_::get(1.5),
                Float_::get(1.5)
            )
        );
    }

    public function testFloatNegativePointSub()
    {
        $this->assertEquals(
            '-1',
            $this->call(
                'floatSub',
                Float_::get(1.5),
                Float_::get(2.5)
            )
        );
    }

    public function testFloatPointMul()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'floatMul',
                Float_::get(5),
                Float_::get(1.5)
            )
        );
    }

    public function testFloatPointAddFromOtherMethod()
    {
        $this->assertEquals(
            '3',
            $this->call(
                'floatAddFromOtherMethod',
                Float_::get(1.5),
                Float_::get(1.5)
            )
        );
    }

    public function testFloatPointSubFromOtherMethod()
    {
        $this->assertEquals(
            '0',
            $this->call(
                'floatSubFromOtherMethod',
                Float_::get(1.5),
                Float_::get(1.5)
            )
        );
    }

    public function testFloatNegativePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '-1',
            $this->call(
                'floatSubFromOtherMethod',
                Float_::get(1.5),
                Float_::get(2.5)
            )
        );
    }

    public function testFloatMulPointFromOtherMethod()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'floatMulFromOtherMethod',
                Float_::get(5),
                Float_::get(1.5)
            )
        );
    }
}
