<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;

class NegationTest extends Base
{
    protected $fixtures = [
        'NegationTest',
    ];

    private function call($method, ...$arguments)
    {
        $calculatedValue = static::$initiatedJavaClasses['NegationTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $method,
                ...$arguments
            );

        return $calculatedValue->getValue();
    }

    public function testNegateIntPattern1()
    {
        $actual = $this->call(
            'negateInt',
            _Int::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateIntPattern2()
    {
        $actual = $this->call(
            'negateInt',
            _Int::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateDoublePattern1()
    {
        $actual = $this->call(
            'negateDouble',
            _Double::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateDoublePattern2()
    {
        $actual = $this->call(
            'negateDouble',
            _Double::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateDoublePattern3()
    {
        $actual = $this->call(
            'negateDouble',
            _Double::get(123.5)
        );
        $this->assertEquals('-123.5', $actual);
    }

    public function testNegateDoublePattern4()
    {
        $actual = $this->call(
            'negateDouble',
            _Double::get(-123.5)
        );
        $this->assertEquals('123.5', $actual);
    }

    public function testNegateFloatPattern1()
    {
        $actual = $this->call(
            'negateFloat',
            _Float::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateFloatPattern2()
    {
        $actual = $this->call(
            'negateFloat',
            _Float::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateFloatPattern3()
    {
        $actual = $this->call(
            'negateFloat',
            _Float::get(123.5)
        );
        $this->assertEquals('-123.5', $actual);
    }

    public function testNegateFloatPattern4()
    {
        $actual = $this->call(
            'negateFloat',
            _Float::get(-123.5)
        );
        $this->assertEquals('123.5', $actual);
    }

    public function testNegateLongPattern1()
    {
        $actual = $this->call(
            'negateLong',
            _Long::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateLongPattern2()
    {
        $actual = $this->call(
            'negateLong',
            _Long::get(-123)
        );
        $this->assertEquals('123', $actual);
    }
}
