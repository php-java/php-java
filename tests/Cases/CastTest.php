<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Float_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Long_;
use PHPJava\Kernel\Types\Short_;

class CastTest extends Base
{
    protected $fixtures = [
        'CastTest',
    ];

    public function testIntToShort()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testIntToShort',
                new Int_(1234)
            );

        $this->assertInstanceOf(Short_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testIntToDouble()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testIntToDouble',
                new Int_(1234)
            );

        // check type
        $this->assertInstanceOf(Double_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testIntToFloat()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testIntToFloat',
                new Int_(1234)
            );

        // check type
        $this->assertInstanceOf(Float_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testIntToByte()
    {
        // Byte processing is special.
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testIntToByte',
                new Int_(123)
            );

        // check type
        $this->assertInstanceOf(Byte_::class, $result);
        $this->assertEquals(123, $result->getValue());
    }

    public function testIntToChar()
    {
        // Char processing is special.
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testIntToChar',
                new Int_(123)
            );

        // check type
        $this->assertInstanceOf(Char_::class, $result);
        $this->assertEquals('{', (string) $result);
    }

    public function testLongToDouble()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testLongToDouble',
                new Long_(1234)
            );

        $this->assertInstanceOf(Double_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testLongToFloat()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testLongToFloat',
                new Long_(1234)
            );

        // check type
        $this->assertInstanceOf(Float_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testLongToInt()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testLongToInt',
                new Long_(1234)
            );

        // check type
        $this->assertInstanceOf(Int_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testDoubleToFloat()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testDoubleToFloat',
                new Double_(1234)
            );

        $this->assertInstanceOf(Float_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testDoubleToInt()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testDoubleToInt',
                new Double_(1234)
            );

        // check type
        $this->assertInstanceOf(Int_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testDoubleToLong()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testDoubleToLong',
                new Double_(1234)
            );

        // check type
        $this->assertInstanceOf(Long_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testFloatToDouble()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testFloatToDouble',
                new Float_(1234)
            );

        $this->assertInstanceOf(Double_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testFloatToInt()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testFloatToInt',
                new Float_(1234)
            );

        // check type
        $this->assertInstanceOf(Int_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }

    public function testFloatToLong()
    {
        $result = static::$initiatedJavaClasses['CastTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testFloatToLong',
                new Float_(1234)
            );

        // check type
        $this->assertInstanceOf(Long_::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }
}
