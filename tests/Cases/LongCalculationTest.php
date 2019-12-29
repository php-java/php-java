<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Long_;

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
                Long_::get(10),
                Long_::get(20)
            )
        );
    }

    public function testLongSub()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'longSub',
                Long_::get(10),
                Long_::get(5)
            )
        );
    }

    public function testLongNegativeSub()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'longSub',
                Long_::get(10),
                Long_::get(20)
            )
        );
    }

    public function testLongMul()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'longMul',
                Long_::get(10),
                Long_::get(5)
            )
        );
    }

    public function testLongAddFromOtherMethod()
    {
        $this->assertEquals(
            '30',
            $this->call(
                'longAddFromOtherMethod',
                Long_::get(10),
                Long_::get(20)
            )
        );
    }

    public function testLongSubFromOtherMethod()
    {
        $this->assertEquals(
            '5',
            $this->call(
                'longSubFromOtherMethod',
                Long_::get(10),
                Long_::get(5)
            )
        );
    }

    public function testLongNegativeSubFromOtherMethod()
    {
        $this->assertEquals(
            '-10',
            $this->call(
                'longSubFromOtherMethod',
                Long_::get(10),
                Long_::get(20)
            )
        );
    }

    public function testLongMulFromOtherMethod()
    {
        $this->assertEquals(
            '50',
            $this->call(
                'longMulFromOtherMethod',
                Long_::get(10),
                Long_::get(5)
            )
        );
    }
}
