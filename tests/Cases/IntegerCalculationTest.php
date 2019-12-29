<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class IntegerCalculationTest extends Base
{
    protected $fixtures = [
        'IntegerCalculationTest',
    ];

    private function call($name, ...$parameters)
    {
        return static::$initiatedJavaClasses['IntegerCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    public function testIntAdd()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'intAdd',
                10,
                20
            )
        );
    }

    public function testIntSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'intSub',
                10,
                5
            )
        );
    }

    public function testIntNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'intSub',
                10,
                20
            )
        );
    }

    public function testIntMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'intMul',
                10,
                5
            )
        );
    }

    public function testIntAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'intAddFromOtherMethod',
                10,
                20
            )
        );
    }

    public function testIntSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'intSubFromOtherMethod',
                10,
                5
            )
        );
    }

    public function testIntNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'intSubFromOtherMethod',
                10,
                20
            )
        );
    }

    public function testIntMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'intMulFromOtherMethod',
                10,
                5
            )
        );
    }
}
