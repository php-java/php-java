<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\_Long;

class LongCalculationTest extends Base
{
    protected $fixtures = [
        'LongCalculationTest',
    ];

    private function call($name, ...$parameters)
    {
        return static::$initiatedJavaClasses['LongCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    public function testLongAdd()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'longAdd',
                _Long::get(10),
                _Long::get(20)
            )
        );
    }

    public function testLongSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'longSub',
                _Long::get(10),
                _Long::get(5)
            )
        );
    }

    public function testLongNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'longSub',
                _Long::get(10),
                _Long::get(20)
            )
        );
    }

    public function testLongMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'longMul',
                _Long::get(10),
                _Long::get(5)
            )
        );
    }

    public function testLongAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'longAddFromOtherMethod',
                _Long::get(10),
                _Long::get(20)
            )
        );
    }

    public function testLongSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'longSubFromOtherMethod',
                _Long::get(10),
                _Long::get(5)
            )
        );
    }

    public function testLongNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'longSubFromOtherMethod',
                _Long::get(10),
                _Long::get(20)
            )
        );
    }

    public function testLongMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'longMulFromOtherMethod',
                _Long::get(10),
                _Long::get(5)
            )
        );
    }
}
