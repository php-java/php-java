<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Double_;

class DoubleCalculationTest extends Base
{
    protected $fixtures = [
        'DoubleCalculationTest',
    ];

    private function call($name, ...$parameters)
    {
        return (string) static::$initiatedJavaClasses['DoubleCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    public function testDoubleAdd()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'doubleAdd',
                Double_::get(10),
                Double_::get(20)
            )
        );
    }

    public function testDoubleSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'doubleSub',
                Double_::get(10),
                Double_::get(5)
            )
        );
    }

    public function testDoubleNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'doubleSub',
                Double_::get(10),
                Double_::get(20)
            )
        );
    }

    public function testDoubleMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'doubleMul',
                Double_::get(10),
                Double_::get(5)
            )
        );
    }

    public function testDoubleAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'doubleAddFromOtherMethod',
                Double_::get(10),
                Double_::get(20)
            )
        );
    }

    public function testDoubleSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'doubleSubFromOtherMethod',
                Double_::get(10),
                Double_::get(5)
            )
        );
    }

    public function testDoubleNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'doubleSubFromOtherMethod',
                Double_::get(10),
                Double_::get(20)
            )
        );
    }

    public function testDoubleMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'doubleMulFromOtherMethod',
                Double_::get(10),
                Double_::get(5)
            )
        );
    }

    public function testDoublePointAdd()
    {
        $this->assertEquals(
            '3.0',
            $this->call(
                'doubleAdd',
                Double_::get(1.5),
                Double_::get(1.5)
            )
        );
    }

    public function testDoublePointSub()
    {
        $this->assertEquals(
            '0.0',
            $this->call(
                'doubleSub',
                Double_::get(1.5),
                Double_::get(1.5)
            )
        );
    }

    public function testDoubleNegativePointSub()
    {
        $this->assertEquals(
            '-1.0',
            $this->call(
                'doubleSub',
                Double_::get(1.5),
                Double_::get(2.5)
            )
        );
    }

    public function testDoublePointMul()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'doubleMul',
                Double_::get(5),
                Double_::get(1.5)
            )
        );
    }

    public function testDoublePointAddFromOtherMethod()
    {
        $this->assertEquals(
            '3.0',
            $this->call(
                'doubleAddFromOtherMethod',
                Double_::get(1.5),
                Double_::get(1.5)
            )
        );
    }

    public function testDoublePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '0.0',
            $this->call(
                'doubleSubFromOtherMethod',
                Double_::get(1.5),
                Double_::get(1.5)
            )
        );
    }

    public function testDoubleNegativePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '-1.0',
            $this->call(
                'doubleSubFromOtherMethod',
                Double_::get(1.5),
                Double_::get(2.5)
            )
        );
    }

    public function testDoubleMulPointFromOtherMethod()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'doubleMulFromOtherMethod',
                Double_::get(5),
                Double_::get(1.5)
            )
        );
    }
}
