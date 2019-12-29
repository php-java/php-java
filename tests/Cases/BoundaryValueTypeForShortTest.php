<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForShortTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForShortTest',
    ];

    public function testStaticS0()
    {
        $this->assertStaticField(
            '1234',
            's0'
        );
    }

    public function testStaticS1()
    {
        $this->assertStaticField(
            '32767',
            's1'
        );
    }

    public function testStaticS2()
    {
        $this->assertStaticField(
            '-1',
            's2'
        );
    }

    public function testStaticS3()
    {
        $this->assertStaticField(
            '-1234',
            's3'
        );
    }

    public function testStaticS4()
    {
        $this->assertStaticField(
            '-32768',
            's4'
        );
    }

    public function testStaticS5()
    {
        $this->assertStaticField(
            '0',
            's5'
        );
    }

    public function testDynamicS0()
    {
        $this->assertDynamicField(
            '1234',
            's0'
        );
    }

    public function testDynamicS1()
    {
        $this->assertDynamicField(
            '32767',
            's1'
        );
    }

    public function testDynamicS2()
    {
        $this->assertDynamicField(
            '-1',
            's2'
        );
    }

    public function testDynamicS3()
    {
        $this->assertDynamicField(
            '-1234',
            's3'
        );
    }

    public function testDynamicS4()
    {
        $this->assertDynamicField(
            '-32768',
            's4'
        );
    }

    public function testDynamicS5()
    {
        $this->assertDynamicField(
            '0',
            's5'
        );
    }

    public function testStaticArrayShorts()
    {
        $array = $this->getStaticField('s_a_s');
        $this->assertCount(6, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('-1', (string) $array[2]);
        $this->assertEquals('-1234', (string) $array[3]);
        $this->assertEquals('-32768', (string) $array[4]);
        $this->assertEquals('0', (string) $array[5]);
    }

    public function testDynamicArrayShorts()
    {
        $array = $this->getDynamicField('d_a_s');
        $this->assertCount(6, $array);

        $this->assertEquals('1234', (string) $array[0]);
        $this->assertEquals('32767', (string) $array[1]);
        $this->assertEquals('-1', (string) $array[2]);
        $this->assertEquals('-1234', (string) $array[3]);
        $this->assertEquals('-32768', (string) $array[4]);
        $this->assertEquals('0', (string) $array[5]);
    }

    public function testStaticMultiDimensionArrayShorts()
    {
        $array = $this->getStaticField('s_ma_s');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(3, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('-1', (string) $array[0][2]);
        $this->assertEquals('-1234', (string) $array[1][0]);
        $this->assertEquals('-32768', (string) $array[1][1]);
        $this->assertEquals('0', (string) $array[1][2]);
    }

    public function testDynamicMultiDimensionArrayShorts()
    {
        $array = $this->getDynamicField('d_ma_s');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(3, $array[1]);

        $this->assertEquals('1234', (string) $array[0][0]);
        $this->assertEquals('32767', (string) $array[0][1]);
        $this->assertEquals('-1', (string) $array[0][2]);
        $this->assertEquals('-1234', (string) $array[1][0]);
        $this->assertEquals('-32768', (string) $array[1][1]);
        $this->assertEquals('0', (string) $array[1][2]);
    }
}
