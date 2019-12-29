<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;

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
                new _Int(1234)
            );

        $this->assertInstanceOf(_Short::class, $result);
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
                new _Int(1234)
            );

        // check type
        $this->assertInstanceOf(_Double::class, $result);
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
                new _Int(1234)
            );

        // check type
        $this->assertInstanceOf(_Float::class, $result);
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
                new _Int(123)
            );

        // check type
        $this->assertInstanceOf(_Byte::class, $result);
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
                new _Int(123)
            );

        // check type
        $this->assertInstanceOf(_Char::class, $result);
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
                new _Long(1234)
            );

        $this->assertInstanceOf(_Double::class, $result);
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
                new _Long(1234)
            );

        // check type
        $this->assertInstanceOf(_Float::class, $result);
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
                new _Long(1234)
            );

        // check type
        $this->assertInstanceOf(_Int::class, $result);
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
                new _Double(1234)
            );

        $this->assertInstanceOf(_Float::class, $result);
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
                new _Double(1234)
            );

        // check type
        $this->assertInstanceOf(_Int::class, $result);
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
                new _Double(1234)
            );

        // check type
        $this->assertInstanceOf(_Long::class, $result);
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
                new _Float(1234)
            );

        $this->assertInstanceOf(_Double::class, $result);
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
                new _Float(1234)
            );

        // check type
        $this->assertInstanceOf(_Int::class, $result);
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
                new _Float(1234)
            );

        // check type
        $this->assertInstanceOf(_Long::class, $result);
        $this->assertEquals(1234, $result->getValue());
    }
}
