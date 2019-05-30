<?php
namespace PHPJava\Tests;

class BoundaryValueTypeForCharTest extends Base
{
    use Helpers\MakeUnicodeChar;
    use Helpers\GetField;
    use Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForCharTest',
    ];

    // TODO: Fix integer to char value
    public function testStaticC0()
    {
        $this->assertStaticField(
            $this->makeUnicodeChar(0x0000),
            'c0'
        );
    }

    public function testStaticC1()
    {
        $this->assertStaticField(
            $this->makeUnicodeChar(0xFFFF),
            'c1'
        );
    }

    public function testStaticC2()
    {
        $this->assertStaticField(
            $this->makeUnicodeChar(0x7FFF),
            'c2'
        );
    }

    public function testStaticC3()
    {
        $this->assertStaticField(
            $this->makeUnicodeChar(0x8000),
            'c3'
        );
    }

    public function testStaticC4()
    {
        $this->assertStaticField(
            $this->makeUnicodeChar(0x9123),
            'c4'
        );
    }

    public function testDynamicC0()
    {
        $this->assertDynamicField(
            $this->makeUnicodeChar(0x0000),
            'c0'
        );
    }

    public function testDynamicC1()
    {
        $this->assertDynamicField(
            $this->makeUnicodeChar(0xFFFF),
            'c1'
        );
    }

    public function testDynamicC2()
    {
        $this->assertDynamicField(
            $this->makeUnicodeChar(0x7FFF),
            'c2'
        );
    }

    public function testDynamicC3()
    {
        $this->assertDynamicField(
            $this->makeUnicodeChar(0x8000),
            'c3'
        );
    }

    public function testDynamicC4()
    {
        $this->assertDynamicField(
            $this->makeUnicodeChar(0x9123),
            'c4'
        );
    }

    public function testStaticArrayChars()
    {
        $array = $this->getStaticField('s_a_c');
        $this->assertCount(5, $array);

        $this->assertEquals($this->makeUnicodeChar(0x0000), (string) $array[0]);
        $this->assertEquals($this->makeUnicodeChar(0xFFFF), (string) $array[1]);
        $this->assertEquals($this->makeUnicodeChar(0x7FFF), (string) $array[2]);
        $this->assertEquals($this->makeUnicodeChar(0x8000), (string) $array[3]);
        $this->assertEquals($this->makeUnicodeChar(0x9123), (string) $array[4]);
    }

    public function testDynamicArrayChars()
    {
        $array = $this->getDynamicField('d_a_c');
        $this->assertCount(5, $array);

        $this->assertEquals($this->makeUnicodeChar(0x0000), (string) $array[0]);
        $this->assertEquals($this->makeUnicodeChar(0xFFFF), (string) $array[1]);
        $this->assertEquals($this->makeUnicodeChar(0x7FFF), (string) $array[2]);
        $this->assertEquals($this->makeUnicodeChar(0x8000), (string) $array[3]);
        $this->assertEquals($this->makeUnicodeChar(0x9123), (string) $array[4]);
    }

    public function testStaticMultiDimensionArrayChars()
    {
        $array = $this->getStaticField('s_ma_c');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(2, $array[1]);

        $this->assertEquals($this->makeUnicodeChar(0x0000), (string) $array[0][0]);
        $this->assertEquals($this->makeUnicodeChar(0xFFFF), (string) $array[0][1]);
        $this->assertEquals($this->makeUnicodeChar(0x7FFF), (string) $array[0][2]);
        $this->assertEquals($this->makeUnicodeChar(0x8000), (string) $array[1][0]);
        $this->assertEquals($this->makeUnicodeChar(0x9123), (string) $array[1][1]);
    }

    public function testDynamicMultiDimensionArrayChars()
    {
        $array = $this->getDynamicField('d_ma_c');
        $this->assertCount(2, $array);
        $this->assertCount(3, $array[0]);
        $this->assertCount(2, $array[1]);

        $this->assertEquals($this->makeUnicodeChar(0x0000), (string) $array[0][0]);
        $this->assertEquals($this->makeUnicodeChar(0xFFFF), (string) $array[0][1]);
        $this->assertEquals($this->makeUnicodeChar(0x7FFF), (string) $array[0][2]);
        $this->assertEquals($this->makeUnicodeChar(0x8000), (string) $array[1][0]);
        $this->assertEquals($this->makeUnicodeChar(0x9123), (string) $array[1][1]);
    }
}
