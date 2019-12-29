<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Long_;

class BinaryOperatorTest extends Base
{
    protected $fixtures = [
        'BinaryOperatorTest',
    ];

    private function call($method, $value1, $value2)
    {
        $calculatedValue = static::$initiatedJavaClasses['BinaryOperatorTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method, $value1, $value2);

        return $calculatedValue->getValue();
    }

    private function callWithLong($method, $value1, $value2)
    {
        $calculatedValue = static::$initiatedJavaClasses['BinaryOperatorTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $method,
                Long_::get($value1),
                Long_::get($value2)
            );

        return $calculatedValue->getValue();
    }

    public function testIntAdd()
    {
        $actual = $this->call('intAdd', 5, 3);
        $this->assertEquals(8, $actual);
    }

    public function testIntSub()
    {
        $actual = $this->call('intSub', 5, 3);
        $this->assertEquals(2, $actual);
    }

    public function testIntMul()
    {
        $actual = $this->call('intMul', 5, 3);
        $this->assertEquals(15, $actual);
    }

    public function testIntShl()
    {
        $actual = $this->call('intShl', 3, 2);
        $this->assertEquals(12, $actual);
    }

    public function testIntShr()
    {
        $actual = $this->call('intShr', 12, 2);
        $this->assertEquals(3, $actual);
    }

    public function testIntUshr()
    {
        $actual = $this->call('intUshr', 12, 2);
        $this->assertEquals(3, $actual);
    }

    public function testIntAnd()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0001', 2, 10);
        $actual = $this->call('intAnd', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }

    public function testIntOr()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0111', 2, 10);
        $actual = $this->call('intOr', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }

    public function testIntXor()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0110', 2, 10);
        $actual = $this->call('intXor', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }

    public function testLongAdd()
    {
        $actual = $this->callWithLong('longAdd', 5, 3);
        $this->assertEquals(8, $actual);
    }

    public function testLongSub()
    {
        $actual = $this->callWithLong('longSub', 5, 3);
        $this->assertEquals(2, $actual);
    }

    public function testLongMul()
    {
        $actual = $this->callWithLong('longMul', 5, 3);
        $this->assertEquals(15, $actual);
    }

    public function testLongShl()
    {
        $actual = $this->callWithLong('longShl', 3, 2);
        $this->assertEquals(12, $actual);
    }

    public function testLongShr()
    {
        $actual = $this->callWithLong('longShr', 12, 2);
        $this->assertEquals(3, $actual);
    }

    public function testLongUshr()
    {
        $actual = $this->callWithLong('longUshr', 12, 2);
        $this->assertEquals(3, $actual);
    }

    public function testLongAnd()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0001', 2, 10);
        $actual = $this->callWithLong('longAnd', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }

    public function testLongOr()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0111', 2, 10);
        $actual = $this->callWithLong('longOr', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }

    public function testLongXor()
    {
        $value1 = (int) base_convert('0011', 2, 10);
        $value2 = (int) base_convert('0101', 2, 10);
        $expect = (int) base_convert('0110', 2, 10);
        $actual = $this->callWithLong('longXor', $value1, $value2);
        $this->assertEquals($expect, $actual);
    }
}
