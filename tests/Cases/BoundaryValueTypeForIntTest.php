<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForIntTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForIntTest',
    ];

    public function testStaticI0()
    {
        $this->assertStaticField(
            '1234',
            'i0'
        );
    }

    public function testStaticI1()
    {
        $this->assertStaticField(
            '32767',
            'i1'
        );
    }

    public function testStaticI2()
    {
        $this->assertStaticField(
            '32768',
            'i2'
        );
    }

    public function testStaticI3()
    {
        $this->assertStaticField(
            '2147483647',
            'i3'
        );
    }

    public function testStaticI4()
    {
        $this->assertStaticField(
            '-1',
            'i4'
        );
    }

    public function testStaticI5()
    {
        $this->assertStaticField(
            '-1234',
            'i5'
        );
    }

    public function testStaticI6()
    {
        $this->assertStaticField(
            '-2147483648',
            'i6'
        );
    }

    public function testStaticI7()
    {
        $this->assertStaticField(
            '-32768',
            'i7'
        );
    }

    public function testStaticI8()
    {
        $this->assertStaticField(
            '0',
            'i8'
        );
    }

    public function testDynamicI0()
    {
        $this->assertDynamicField(
            '1234',
            'i0'
        );
    }

    public function testDynamicI1()
    {
        $this->assertDynamicField(
            '32767',
            'i1'
        );
    }

    public function testDynamicI2()
    {
        $this->assertDynamicField(
            '32768',
            'i2'
        );
    }

    public function testDynamicI3()
    {
        $this->assertDynamicField(
            '2147483647',
            'i3'
        );
    }

    public function testDynamicI4()
    {
        $this->assertDynamicField(
            '-1',
            'i4'
        );
    }

    public function testDynamicI5()
    {
        $this->assertDynamicField(
            '-1234',
            'i5'
        );
    }

    public function testDynamicI6()
    {
        $this->assertDynamicField(
            '-2147483648',
            'i6'
        );
    }

    public function testDynamicI7()
    {
        $this->assertDynamicField(
            '-32768',
            'i7'
        );
    }

    public function testDynamicI8()
    {
        $this->assertDynamicField(
            '0',
            'i8'
        );
    }

    public function testStaticArrayIntegers()
    {
        $array = $this->getStaticField('s_a_i');
        $this->assertCount(9, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('32768', (string) $array[2]);
        $this->assertEquals('2147483647', (string) $array[3]);
        $this->assertEquals('-1', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-2147483648', (string) $array[6]);
        $this->assertEquals('-32768', (string) $array[7]);
        $this->assertEquals('0', (string) $array[8]);
    }

    public function testDynamicArrayIntegers()
    {
        $array = $this->getDynamicField('d_a_i');
        $this->assertCount(9, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('32768', (string) $array[2]);
        $this->assertEquals('2147483647', (string) $array[3]);
        $this->assertEquals('-1', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-2147483648', (string) $array[6]);
        $this->assertEquals('-32768', (string) $array[7]);
        $this->assertEquals('0', (string) $array[8]);
    }

    public function testStaticMultiDimensionArrayIntegers()
    {
        $array = $this->getStaticField('s_ma_i');
        $this->assertCount(2, $array);
        $this->assertCount(4, $array[0]);
        $this->assertCount(5, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('32768', (string) $array[0][2]);
        $this->assertEquals('2147483647', (string) $array[0][3]);
        $this->assertEquals('-1', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-2147483648', (string) $array[1][2]);
        $this->assertEquals('-32768', (string) $array[1][3]);
        $this->assertEquals('0', (string) $array[1][4]);
    }

    public function testDynamicMultiDimensionArrayIntegers()
    {
        $array = $this->getDynamicField('d_ma_i');
        $this->assertCount(2, $array);
        $this->assertCount(4, $array[0]);
        $this->assertCount(5, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('32768', (string) $array[0][2]);
        $this->assertEquals('2147483647', (string) $array[0][3]);
        $this->assertEquals('-1', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-2147483648', (string) $array[1][2]);
        $this->assertEquals('-32768', (string) $array[1][3]);
        $this->assertEquals('0', (string) $array[1][4]);
    }
}
