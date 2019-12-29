<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Types\Long_;

class BigNumberCalculationTest extends Base
{
    protected $fixtures = [
        'BigNumberCalculationTest',
    ];

    private function call($method, ...$arguments)
    {
        return static::$initiatedJavaClasses['BigNumberCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method, ...$arguments);
    }

    public function testAdd()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            Long_::get(PHP_INT_MAX - 1),
            Long_::get(1)
        );

        $this->assertEquals('9223372036854775807', (string) $result);
    }

    public function testSub()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            Long_::get((string) BigInteger::of(PHP_INT_MAX)),
            Long_::get(1)
        );

        $this->assertEquals('9223372036854775806', (string) $result);
    }

    public function testMul()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            Long_::get(2147483647),
            Long_::get(3)
        );

        $this->assertEquals('6442450941', (string) $result);
    }

    public function testDiv()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            Long_::get(6442450947),
            Long_::get(2147483649)
        );

        $this->assertEquals('3', (string) $result);
    }
}
