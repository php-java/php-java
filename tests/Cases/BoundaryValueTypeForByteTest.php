<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class BoundaryValueTypeForByteTest extends Base
{
    use \PHPJava\Tests\Helpers\GetField;
    use \PHPJava\Tests\Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForByteTest',
    ];

    public function testStaticBy0()
    {
        $this->assertStaticField(
            '0',
            'by0'
        );
    }

    public function testStaticBy1()
    {
        $this->assertStaticField(
            '127',
            'by1'
        );
    }

    public function testStaticBy2()
    {
        $this->assertStaticField(
            '18',
            'by2'
        );
    }

    public function testStaticBy3()
    {
        $this->assertStaticField(
            '-1',
            'by3'
        );
    }

    public function testStaticBy4()
    {
        $this->assertStaticField(
            '-127',
            'by4'
        );
    }

    public function testStaticBy5()
    {
        $this->assertStaticField(
            '-18',
            'by5'
        );
    }

    public function testStaticBy6()
    {
        $this->assertStaticField(
            '-128',
            'by6'
        );
    }

    public function testDynamicBy0()
    {
        $this->assertDynamicField(
            '0',
            'by0'
        );
    }

    public function testDynamicBy1()
    {
        $this->assertDynamicField(
            '127',
            'by1'
        );
    }

    public function testDynamicBy2()
    {
        $this->assertDynamicField(
            '18',
            'by2'
        );
    }

    public function testDynamicBy3()
    {
        $this->assertDynamicField(
            '-1',
            'by3'
        );
    }

    public function testDynamicBy4()
    {
        $this->assertDynamicField(
            '-127',
            'by4'
        );
    }

    public function testDynamicBy5()
    {
        $this->assertDynamicField(
            '-18',
            'by5'
        );
    }

    public function testDynamicBy6()
    {
        $this->assertDynamicField(
            '-128',
            'by6'
        );
    }

    public function testStaticArrayBytes()
    {
        $array = $this->getStaticField('s_a_by');
        $this->assertCount(7, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('127', (string) $array[1]);
        $this->assertEquals('18', (string) $array[2]);
        $this->assertEquals('-1', (string) $array[3]);
        $this->assertEquals('-127', (string) $array[4]);
        $this->assertEquals('-18', (string) $array[5]);
        $this->assertEquals('-128', (string) $array[6]);
    }

    public function testDynamicArrayBytes()
    {
        $array = $this->getDynamicField('d_a_by');
        $this->assertCount(7, $array);

        $this->assertEquals('0', (string) $array[0]);
        $this->assertEquals('127', (string) $array[1]);
        $this->assertEquals('18', (string) $array[2]);
        $this->assertEquals('-1', (string) $array[3]);
        $this->assertEquals('-127', (string) $array[4]);
        $this->assertEquals('-18', (string) $array[5]);
        $this->assertEquals('-128', (string) $array[6]);
    }

    public function testStaticMultiDimensionArrayBytes()
    {
        $array = $this->getStaticField('s_ma_by');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(4, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('127', (string) $array[0][1]);
        $this->assertEquals('18', (string) $array[0][2]);

        $this->assertEquals('-1', (string) $array[1][0]);
        $this->assertEquals('-127', (string) $array[1][1]);
        $this->assertEquals('-18', (string) $array[1][2]);
        $this->assertEquals('-128', (string) $array[1][3]);
    }

    public function testDynamicMultiDimensionArrayBytes()
    {
        $array = $this->getDynamicField('d_ma_by');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(4, $array[1]);

        $this->assertEquals('0', (string) $array[0][0]);
        $this->assertEquals('127', (string) $array[0][1]);
        $this->assertEquals('18', (string) $array[0][2]);

        $this->assertEquals('-1', (string) $array[1][0]);
        $this->assertEquals('-127', (string) $array[1][1]);
        $this->assertEquals('-18', (string) $array[1][2]);
        $this->assertEquals('-128', (string) $array[1][3]);
    }
}
