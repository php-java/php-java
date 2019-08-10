<?php
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForLongTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForLongTest',
    ];

    public function testStaticL0()
    {
        $this->assertStaticField(
            '1234',
            'l0'
        );
    }

    public function testStaticL1()
    {
        $this->assertStaticField(
            '32767',
            'l1'
        );
    }

    public function testStaticL2()
    {
        $this->assertStaticField(
            '32768',
            'l2'
        );
    }

    public function testStaticL3()
    {
        $this->assertStaticField(
            '2147483647',
            'l3'
        );
    }

    public function testStaticL4()
    {
        $this->assertStaticField(
            '-1',
            'l4'
        );
    }

    public function testStaticL5()
    {
        $this->assertStaticField(
            '-1234',
            'l5'
        );
    }

    public function testStaticL6()
    {
        $this->assertStaticField(
            '-2147483648',
            'l6'
        );
    }

    public function testStaticL7()
    {
        $this->assertStaticField(
            '-32768',
            'l7'
        );
    }

    public function testStaticL8()
    {
        $this->assertStaticField(
            '-9223372036854775808',
            'l8'
        );
    }

    public function testStaticL9()
    {
        $this->assertStaticField(
            '9223372036854775807',
            'l9'
        );
    }

    public function testStaticL10()
    {
        $this->assertStaticField(
            '0',
            'l10'
        );
    }

    public function testDynamicL0()
    {
        $this->assertDynamicField(
            '1234',
            'l0'
        );
    }

    public function testDynamicL1()
    {
        $this->assertDynamicField(
            '32767',
            'l1'
        );
    }

    public function testDynamicL2()
    {
        $this->assertDynamicField(
            '32768',
            'l2'
        );
    }

    public function testDynamicL3()
    {
        $this->assertDynamicField(
            '2147483647',
            'l3'
        );
    }

    public function testDynamicL4()
    {
        $this->assertDynamicField(
            '-1',
            'l4'
        );
    }

    public function testDynamicL5()
    {
        $this->assertDynamicField(
            '-1234',
            'l5'
        );
    }

    public function testDynamicL6()
    {
        $this->assertDynamicField(
            '-2147483648',
            'l6'
        );
    }

    public function testDynamicL7()
    {
        $this->assertDynamicField(
            '-32768',
            'l7'
        );
    }

    public function testDynamicL8()
    {
        $this->assertDynamicField(
            '-9223372036854775808',
            'l8'
        );
    }

    public function testDynamicL9()
    {
        $this->assertDynamicField(
            '9223372036854775807',
            'l9'
        );
    }

    public function testDynamicL10()
    {
        $this->assertDynamicField(
            '0',
            'l10'
        );
    }

    public function testStaticArrayLongs()
    {
        $array = $this->getStaticField('s_a_l');
        $this->assertCount(11, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('32768', (string) $array[2]);
        $this->assertEquals('2147483647', (string) $array[3]);
        $this->assertEquals('-1', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-2147483648', (string) $array[6]);
        $this->assertEquals('-32768', (string) $array[7]);
        $this->assertEquals('-9223372036854775808', (string) $array[8]);
        $this->assertEquals('9223372036854775807', (string) $array[9]);
        $this->assertEquals('0', (string) $array[10]);
    }

    public function testDynamicArrayLongs()
    {
        $array = $this->getDynamicField('d_a_l');
        $this->assertCount(11, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('32768', (string) $array[2]);
        $this->assertEquals('2147483647', (string) $array[3]);
        $this->assertEquals('-1', (string) $array[4]);
        $this->assertEquals('-1234', (string) $array[5]);
        $this->assertEquals('-2147483648', (string) $array[6]);
        $this->assertEquals('-32768', (string) $array[7]);
        $this->assertEquals('-9223372036854775808', (string) $array[8]);
        $this->assertEquals('9223372036854775807', (string) $array[9]);
        $this->assertEquals('0', (string) $array[10]);
    }

    public function testStaticMultiDimensionArrayLongs()
    {
        $array = $this->getStaticField('s_ma_l');
        $this->assertCount(2, $array);
        $this->assertCount(6, $array[0]);
        $this->assertCount(5, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('32768', (string) $array[0][2]);
        $this->assertEquals('2147483647', (string) $array[0][3]);
        $this->assertEquals('-1', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);

        $this->assertEquals('-2147483648', (string) $array[1][0]);
        $this->assertEquals('-32768', (string) $array[1][1]);
        $this->assertEquals('-9223372036854775808', (string) $array[1][2]);
        $this->assertEquals('9223372036854775807', (string) $array[1][3]);
        $this->assertEquals('0', (string) $array[1][4]);
    }

    public function testDynamicMultiDimensionArrayLongs()
    {
        $array = $this->getDynamicField('d_ma_l');
        $this->assertCount(2, $array);
        $this->assertCount(6, $array[0]);
        $this->assertCount(5, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('32768', (string) $array[0][2]);
        $this->assertEquals('2147483647', (string) $array[0][3]);
        $this->assertEquals('-1', (string) $array[0][4]);
        $this->assertEquals('-1234', (string) $array[0][5]);

        $this->assertEquals('-2147483648', (string) $array[1][0]);
        $this->assertEquals('-32768', (string) $array[1][1]);
        $this->assertEquals('-9223372036854775808', (string) $array[1][2]);
        $this->assertEquals('9223372036854775807', (string) $array[1][3]);
        $this->assertEquals('0', (string) $array[1][4]);
    }
}
