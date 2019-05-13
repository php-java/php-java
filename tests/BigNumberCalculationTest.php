<?php
namespace PHPJava\Tests;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Types\_Long;

class BigNumberCalculationTest extends Base
{
    protected $fixtures = [
        'BigNumberCalculationTest',
    ];

    private function call($method, ...$arguments)
    {
        return $this->initiatedJavaClasses['BigNumberCalculationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method, ...$arguments);
    }

    public function testAdd()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            _Long::get(PHP_INT_MAX),
            _Long::get(PHP_INT_MAX)
        );

        $this->assertEquals('18446744073709551614', (string) $result);
    }

    public function testSub()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            _Long::get((string) BigInteger::of(PHP_INT_MAX)->multipliedBy(2)),
            _Long::get(PHP_INT_MAX)
        );

        $this->assertEquals('9223372036854775807', (string) $result);
    }

    public function testMul()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            _Long::get(PHP_INT_MAX),
            _Long::get(3)
        );

        $this->assertEquals('27670116110564327421', (string) $result);
    }

    public function testDiv()
    {
        $result = $this->call(
            explode('::', __METHOD__)[1],
            _Long::get((string) BigInteger::of(PHP_INT_MAX)->multipliedBy(2)),
            _Long::get(2)
        );

        $this->assertEquals('9223372036854775807', (string) $result);
    }
}
