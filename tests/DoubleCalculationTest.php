<?php
namespace PHPJava\Tests;

use PHPJava\Kernel\Types\_Double;

class DoubleCalculationTest extends Base
{
    protected $fixtures = [
        'DoubleCalculationTest',
    ];

    private function call($name, ...$parameters)
    {
        return (string) $this->initiatedJavaClasses['DoubleCalculationTest']
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
                _Double::get(10),
                _Double::get(20)
            )
        );
    }

    public function testDoubleSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'doubleSub',
                _Double::get(10),
                _Double::get(5)
            )
        );
    }

    public function testDoubleNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'doubleSub',
                _Double::get(10),
                _Double::get(20)
            )
        );
    }

    public function testDoubleMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'doubleMul',
                _Double::get(10),
                _Double::get(5)
            )
        );
    }

    public function testDoubleAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'doubleAddFromOtherMethod',
                _Double::get(10),
                _Double::get(20)
            )
        );
    }

    public function testDoubleSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'doubleSubFromOtherMethod',
                _Double::get(10),
                _Double::get(5)
            )
        );
    }

    public function testDoubleNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'doubleSubFromOtherMethod',
                _Double::get(10),
                _Double::get(20)
            )
        );
    }

    public function testDoubleMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'doubleMulFromOtherMethod',
                _Double::get(10),
                _Double::get(5)
            )
        );
    }

    public function testDoublePointAdd()
    {
        $this->assertEquals(
            '3.0',
            $this->call(
                'doubleAdd',
                _Double::get(1.5),
                _Double::get(1.5)
            )
        );
    }

    public function testDoublePointSub()
    {
        $this->assertEquals(
            '0.0',
            $this->call(
                'doubleSub',
                _Double::get(1.5),
                _Double::get(1.5)
            )
        );
    }

    public function testDoubleNegativePointSub()
    {
        $this->assertEquals(
            '-1.0',
            $this->call(
                'doubleSub',
                _Double::get(1.5),
                _Double::get(2.5)
            )
        );
    }

    public function testDoublePointMul()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'doubleMul',
                _Double::get(5),
                _Double::get(1.5)
            )
        );
    }

    public function testDoublePointAddFromOtherMethod()
    {
        $this->assertEquals(
            '3.0',
            $this->call(
                'doubleAddFromOtherMethod',
                _Double::get(1.5),
                _Double::get(1.5)
            )
        );
    }

    public function testDoublePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '0.0',
            $this->call(
                'doubleSubFromOtherMethod',
                _Double::get(1.5),
                _Double::get(1.5)
            )
        );
    }

    public function testDoubleNegativePointSubFromOtherMethod()
    {
        $this->assertEquals(
            '-1.0',
            $this->call(
                'doubleSubFromOtherMethod',
                _Double::get(1.5),
                _Double::get(2.5)
            )
        );
    }

    public function testDoubleMulPointFromOtherMethod()
    {
        $this->assertEquals(
            '7.5',
            $this->call(
                'doubleMulFromOtherMethod',
                _Double::get(5),
                _Double::get(1.5)
            )
        );
    }
}
