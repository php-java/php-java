<?php
namespace PHPJava\Tests;

class BinaryOperatorTest extends Base
{
    protected $fixtures = [
        'BinaryOperatorTest',
    ];

    private function call($method, $value1, $value2)
    {
        $calculatedValue = $this->initiatedJavaClasses['BinaryOperatorTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method, $value1, $value2);

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
}
