<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Float_;
use PHPJava\Kernel\Types\Int_ ;
use PHPJava\Kernel\Types\Long_;

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
            Int_::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateIntPattern2()
    {
        $actual = $this->call(
            'negateInt',
            Int_::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateDoublePattern1()
    {
        $actual = $this->call(
            'negateDouble',
            Double_::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateDoublePattern2()
    {
        $actual = $this->call(
            'negateDouble',
            Double_::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateDoublePattern3()
    {
        $actual = $this->call(
            'negateDouble',
            Double_::get(123.5)
        );
        $this->assertEquals('-123.5', $actual);
    }

    public function testNegateDoublePattern4()
    {
        $actual = $this->call(
            'negateDouble',
            Double_::get(-123.5)
        );
        $this->assertEquals('123.5', $actual);
    }

    public function testNegateFloatPattern1()
    {
        $actual = $this->call(
            'negateFloat',
            Float_::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateFloatPattern2()
    {
        $actual = $this->call(
            'negateFloat',
            Float_::get(-123)
        );
        $this->assertEquals('123', $actual);
    }

    public function testNegateFloatPattern3()
    {
        $actual = $this->call(
            'negateFloat',
            Float_::get(123.5)
        );
        $this->assertEquals('-123.5', $actual);
    }

    public function testNegateFloatPattern4()
    {
        $actual = $this->call(
            'negateFloat',
            Float_::get(-123.5)
        );
        $this->assertEquals('123.5', $actual);
    }

    public function testNegateLongPattern1()
    {
        $actual = $this->call(
            'negateLong',
            Long_::get(123)
        );
        $this->assertEquals('-123', $actual);
    }

    public function testNegateLongPattern2()
    {
        $actual = $this->call(
            'negateLong',
            Long_::get(-123)
        );
        $this->assertEquals('123', $actual);
    }
}
