<?php
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForFloatTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForFloatTest',
    ];

    public function testStaticF0()
    {
        $this->assertStaticField(
            '0',
            'f0'
        );
    }

    public function testStaticF1()
    {
        $this->assertStaticField(
            '1234',
            'f1'
        );
    }

    public function testStaticF2()
    {
        $this->assertStaticField(
            '0.12340000271797',
            'f2'
        );
    }

    public function testStaticF3()
    {
        $this->assertStaticField(
            '1234',
            'f3'
        );
    }

    public function testStaticF4()
    {
        $this->assertStaticField(
            '1234.1234130859',
            'f4'
        );
    }

    public function testStaticF5()
    {
        $this->assertStaticField(
            '-1234',
            'f5'
        );
    }

    public function testStaticF6()
    {
        $this->assertStaticField(
            '-0.12340000271797',
            'f6'
        );
    }

    public function testStaticF7()
    {
        $this->assertStaticField(
            '-1234',
            'f7'
        );
    }

    public function testStaticF8()
    {
        $this->assertStaticField(
            '-1234.1234130859',
            'f8'
        );
    }

    public function testStaticF9()
    {
        $this->assertStaticField(
            '2139095040',
            'f9'
        );
    }

    public function testStaticF10()
    {
        $this->assertStaticField(
            '-2139095040',
            'f10'
        );
    }

    public function testStaticF11()
    {
        $this->assertStaticField(
            '-8388609',
            'f11'
        );
    }

    public function testStaticF12()
    {
        $this->assertStaticField(
            '8388609',
            'f12'
        );
    }

    public function testDynamicF0()
    {
        $this->assertDynamicField(
            '0',
            'f0'
        );
    }

    public function testDynamicF1()
    {
        $this->assertDynamicField(
            '1234',
            'f1'
        );
    }

    public function testDynamicF2()
    {
        $this->assertDynamicField(
            '0.12340000271797',
            'f2'
        );
    }

    public function testDynamicF3()
    {
        $this->assertDynamicField(
            '1234',
            'f3'
        );
    }

    public function testDynamicF4()
    {
        $this->assertDynamicField(
            '1234.1234130859',
            'f4'
        );
    }

    public function testDynamicF5()
    {
        $this->assertDynamicField(
            '-1234',
            'f5'
        );
    }

    public function testDynamicF6()
    {
        $this->assertDynamicField(
            '-0.12340000271797',
            'f6'
        );
    }

    public function testDynamicF7()
    {
        $this->assertDynamicField(
            '-1234',
            'f7'
        );
    }

    public function testDynamicF8()
    {
        $this->assertDynamicField(
            '-1234.1234130859',
            'f8'
        );
    }

    public function testDynamicF9()
    {
        $this->assertDynamicField(
            '2139095040',
            'f9'
        );
    }

    public function testDynamicF10()
    {
        $this->assertDynamicField(
            '-2139095040',
            'f10'
        );
    }

    public function testDynamicF11()
    {
        $this->assertDynamicField(
            '-8388609',
            'f11'
        );
    }

    public function testDynamicF12()
    {
        $this->assertDynamicField(
            '8388609',
            'f12'
        );
    }

    public function testStaticArrayFloats()
    {
        $array = $this->getStaticField('s_a_f');
        $this->assertCount(13, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('1234', (string) $array[1]);
        $this->assertEquals('0.12340000271797', (string) $array[2]);
        $this->assertEquals('1234', (string) $array[3]);
        $this->assertEquals('1234.1234130859', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-0.12340000271797', (string) $array[6]);
        $this->assertEquals('-1234', (string) $array[7]);
        $this->assertEquals('-1234.1234130859', (string) $array[8]);
        $this->assertEquals('2139095040', (string) $array[9]);
        $this->assertEquals('-2139095040', (string) $array[10]);
        $this->assertEquals('-8388609', (string) $array[11]);
        $this->assertEquals('8388609', (string) $array[12]);
    }

    public function testDynamicArrayFloats()
    {
        $array = $this->getDynamicField('d_a_f');
        $this->assertCount(13, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('1234', (string) $array[1]);
        $this->assertEquals('0.12340000271797', (string) $array[2]);
        $this->assertEquals('1234', (string) $array[3]);
        $this->assertEquals('1234.1234130859', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-0.12340000271797', (string) $array[6]);
        $this->assertEquals('-1234', (string) $array[7]);
        $this->assertEquals('-1234.1234130859', (string) $array[8]);
        $this->assertEquals('2139095040', (string) $array[9]);
        $this->assertEquals('-2139095040', (string) $array[10]);
        $this->assertEquals('-8388609', (string) $array[11]);
        $this->assertEquals('8388609', (string) $array[12]);
    }

    public function testStaticMultiDimensionArrayFloats()
    {
        $array = $this->getStaticField('s_ma_f');
        $this->assertCount(2, $array);
        $this->assertCount(6, $array[0]);
        $this->assertCount(7, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('1234', (string) $array[0][1]);
        $this->assertEquals('0.12340000271797', (string) $array[0][2]);
        $this->assertEquals('1234', (string) $array[0][3]);
        $this->assertEquals('1234.1234130859', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);
        $this->assertEquals('-0.12340000271797', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-1234.1234130859', (string) $array[1][2]);
        $this->assertEquals('2139095040', (string) $array[1][3]);
        $this->assertEquals('-2139095040', (string) $array[1][4]);
        $this->assertEquals('-8388609', (string) $array[1][5]);
        $this->assertEquals('8388609', (string) $array[1][6]);
    }

    public function testDynamicMultiDimensionArrayFloats()
    {
        $array = $this->getDynamicField('d_ma_f');
        $this->assertCount(2, $array);
        $this->assertCount(6, $array[0]);
        $this->assertCount(7, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('1234', (string) $array[0][1]);
        $this->assertEquals('0.12340000271797', (string) $array[0][2]);
        $this->assertEquals('1234', (string) $array[0][3]);
        $this->assertEquals('1234.1234130859', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);
        $this->assertEquals('-0.12340000271797', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-1234.1234130859', (string) $array[1][2]);
        $this->assertEquals('2139095040', (string) $array[1][3]);
        $this->assertEquals('-2139095040', (string) $array[1][4]);
        $this->assertEquals('-8388609', (string) $array[1][5]);
        $this->assertEquals('8388609', (string) $array[1][6]);
    }
}
