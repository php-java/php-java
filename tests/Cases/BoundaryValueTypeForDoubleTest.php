<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForDoubleTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForDoubleTest',
    ];

    public function testStaticD0()
    {
        $this->assertStaticField(
            '0',
            'd0'
        );
    }

    public function testStaticD1()
    {
        $this->assertStaticField(
            '1234',
            'd1'
        );
    }

    public function testStaticD2()
    {
        $this->assertStaticField(
            '0.1234',
            'd2'
        );
    }

    public function testStaticD3()
    {
        $this->assertStaticField(
            '1234',
            'd3'
        );
    }

    public function testStaticD4()
    {
        $this->assertStaticField(
            '1234.1234',
            'd4'
        );
    }

    public function testStaticD5()
    {
        $this->assertStaticField(
            '-1234',
            'd5'
        );
    }

    public function testStaticD6()
    {
        $this->assertStaticField(
            '-0.1234',
            'd6'
        );
    }

    public function testStaticD7()
    {
        $this->assertStaticField(
            '-1234',
            'd7'
        );
    }

    public function testStaticD8()
    {
        $this->assertStaticField(
            '-1234.1234',
            'd8'
        );
    }

    public function testStaticD9()
    {
        $this->assertStaticField(
            '2139095039',
            'd9'
        );
    }

    public function testStaticD10()
    {
        $this->assertStaticField(
            '-2139095039',
            'd10'
        );
    }

    public function testStaticD11()
    {
        $this->assertStaticField(
            '-8388609',
            'd11'
        );
    }

    public function testStaticD12()
    {
        $this->assertStaticField(
            '8388609',
            'd12'
        );
    }

    public function testStaticD13()
    {
        $this->assertStaticField(
            '-4.5035996273705E+15',
            'd13'
        );
    }

    public function testStaticD14()
    {
        $this->assertStaticField(
            '4.5035996273705E+15',
            'd14'
        );
    }

    public function testStaticD15()
    {
        $this->assertStaticField(
            '9.2188684372274E+18',
            'd15'
        );
    }

    public function testStaticD16()
    {
        $this->assertStaticField(
            '-9.2188684372274E+18',
            'd16'
        );
    }

    public function testDynamicD1()
    {
        $this->assertDynamicField(
            '1234',
            'd1'
        );
    }

    public function testDynamicD2()
    {
        $this->assertDynamicField(
            '0.1234',
            'd2'
        );
    }

    public function testDynamicD3()
    {
        $this->assertDynamicField(
            '1234',
            'd3'
        );
    }

    public function testDynamicD4()
    {
        $this->assertDynamicField(
            '1234.1234',
            'd4'
        );
    }

    public function testDynamicD5()
    {
        $this->assertDynamicField(
            '-1234',
            'd5'
        );
    }

    public function testDynamicD6()
    {
        $this->assertDynamicField(
            '-0.1234',
            'd6'
        );
    }

    public function testDynamicD7()
    {
        $this->assertDynamicField(
            '-1234',
            'd7'
        );
    }

    public function testDynamicD8()
    {
        $this->assertDynamicField(
            '-1234.1234',
            'd8'
        );
    }

    public function testDynamicD9()
    {
        $this->assertDynamicField(
            '2139095039',
            'd9'
        );
    }

    public function testDynamicD10()
    {
        $this->assertDynamicField(
            '-2139095039',
            'd10'
        );
    }

    public function testDynamicD11()
    {
        $this->assertDynamicField(
            '-8388609',
            'd11'
        );
    }

    public function testDynamicD12()
    {
        $this->assertDynamicField(
            '8388609',
            'd12'
        );
    }

    public function testDynamicD13()
    {
        $this->assertDynamicField(
            '-4.5035996273705E+15',
            'd13'
        );
    }

    public function testDynamicD14()
    {
        $this->assertDynamicField(
            '4.5035996273705E+15',
            'd14'
        );
    }

    public function testDynamicD15()
    {
        $this->assertDynamicField(
            '9.2188684372274E+18',
            'd15'
        );
    }

    public function testDynamicD16()
    {
        $this->assertDynamicField(
            '-9.2188684372274E+18',
            'd16'
        );
    }

    public function testStaticArrayDoubles()
    {
        $array = $this->getStaticField('s_a_d');
        $this->assertCount(17, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('1234', (string) $array[1]);
        $this->assertEquals('0.1234', (string) $array[2]);
        $this->assertEquals('1234', (string) $array[3]);
        $this->assertEquals('1234.1234', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-0.1234', (string) $array[6]);
        $this->assertEquals('-1234', (string) $array[7]);
        $this->assertEquals('-1234.1234', (string) $array[8]);
        $this->assertEquals('2139095039', (string) $array[9]);
        $this->assertEquals('-2139095039', (string) $array[10]);
        $this->assertEquals('-8388609', (string) $array[11]);
        $this->assertEquals('8388609', (string) $array[12]);
        $this->assertEquals('-4.5035996273705E+15', (string) $array[13]);
        $this->assertEquals('4.5035996273705E+15', (string) $array[14]);
        $this->assertEquals('9.2188684372274E+18', (string) $array[15]);
        $this->assertEquals('-9.2188684372274E+18', (string) $array[16]);
    }

    public function testDynamicArrayDoubles()
    {
        $array = $this->getDynamicField('d_a_d');
        $this->assertCount(17, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('1234', (string) $array[1]);
        $this->assertEquals('0.1234', (string) $array[2]);
        $this->assertEquals('1234', (string) $array[3]);
        $this->assertEquals('1234.1234', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-0.1234', (string) $array[6]);
        $this->assertEquals('-1234', (string) $array[7]);
        $this->assertEquals('-1234.1234', (string) $array[8]);
        $this->assertEquals('2139095039', (string) $array[9]);
        $this->assertEquals('-2139095039', (string) $array[10]);
        $this->assertEquals('-8388609', (string) $array[11]);
        $this->assertEquals('8388609', (string) $array[12]);
        $this->assertEquals('-4.5035996273705E+15', (string) $array[13]);
        $this->assertEquals('4.5035996273705E+15', (string) $array[14]);
        $this->assertEquals('9.2188684372274E+18', (string) $array[15]);
        $this->assertEquals('-9.2188684372274E+18', (string) $array[16]);
    }

    public function testStaticMultiDimensionArrayDoubles()
    {
        $array = $this->getStaticField('s_ma_d');
        $this->assertCount(2, $array);
        $this->assertCount(8, $array[0]);
        $this->assertCount(9, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('1234', (string) $array[0][1]);
        $this->assertEquals('0.1234', (string) $array[0][2]);
        $this->assertEquals('1234', (string) $array[0][3]);
        $this->assertEquals('1234.1234', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);
        $this->assertEquals('-4.5035996273705E+15', (string) $array[0][6]);
        $this->assertEquals('4.5035996273705E+15', (string) $array[0][7]);

        $this->assertEquals('-0.1234', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-1234.1234', (string) $array[1][2]);
        $this->assertEquals('2139095039', (string) $array[1][3]);
        $this->assertEquals('-2139095039', (string) $array[1][4]);
        $this->assertEquals('-8388609', (string) $array[1][5]);
        $this->assertEquals('8388609', (string) $array[1][6]);
        $this->assertEquals('9.2188684372274E+18', (string) $array[1][7]);
        $this->assertEquals('-9.2188684372274E+18', (string) $array[1][8]);
    }

    public function testDynamicMultiDimensionArrayDoubles()
    {
        $array = $this->getDynamicField('d_ma_d');
        $this->assertCount(2, $array);
        $this->assertCount(8, $array[0]);
        $this->assertCount(9, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('1234', (string) $array[0][1]);
        $this->assertEquals('0.1234', (string) $array[0][2]);
        $this->assertEquals('1234', (string) $array[0][3]);
        $this->assertEquals('1234.1234', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);
        $this->assertEquals('-4.5035996273705E+15', (string) $array[0][6]);
        $this->assertEquals('4.5035996273705E+15', (string) $array[0][7]);

        $this->assertEquals('-0.1234', (string) $array[1][0]);
        $this->assertEquals('-1234', (string) $array[1][1]);
        $this->assertEquals('-1234.1234', (string) $array[1][2]);
        $this->assertEquals('2139095039', (string) $array[1][3]);
        $this->assertEquals('-2139095039', (string) $array[1][4]);
        $this->assertEquals('-8388609', (string) $array[1][5]);
        $this->assertEquals('8388609', (string) $array[1][6]);
        $this->assertEquals('9.2188684372274E+18', (string) $array[1][7]);
        $this->assertEquals('-9.2188684372274E+18', (string) $array[1][8]);
    }
}
