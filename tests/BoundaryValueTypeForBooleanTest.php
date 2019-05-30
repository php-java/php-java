<?php
namespace PHPJava\Tests;

class BoundaryValueTypeForBooleanTest extends Base
{
    use Helpers\GetField;
    use Helpers\AssertionHelpers\AssertFields;

    protected $fixtures = [
        'BoundaryValueTypeForBooleanTest',
    ];

    public function testStaticB0()
    {
        $this->assertStaticField(
            'true',
            'b0'
        );
    }

    public function testStaticB1()
    {
        $this->assertStaticField(
            'false',
            'b1'
        );
    }

    public function testDynamicB0()
    {
        $this->assertDynamicField(
            'true',
            'b0'
        );
    }

    public function testDynamicB1()
    {
        $this->assertDynamicField(
            'false',
            'b1'
        );
    }

    public function testStaticArrayBooleans()
    {
        $array = $this->getStaticField('s_a_b');
        $this->assertCount(2, $array);

        $this->assertEquals('true', (string) $array[0]);
        $this->assertEquals('false', (string) $array[1]);
    }

    public function testDynamicArrayBooleans()
    {
        $array = $this->getDynamicField('d_a_b');
        $this->assertCount(2, $array);

        $this->assertEquals('true', (string) $array[0]);
        $this->assertEquals('false', (string) $array[1]);
    }

    public function testStaticMultiDimensionArrayBooleans()
    {
        $array = $this->getStaticField('s_ma_b');
        $this->assertCount(2, $array);
        $this->assertCount(2, $array[0]);
        $this->assertCount(2, $array[1]);

        $this->assertEquals('true', (string) $array[0][0]);
        $this->assertEquals('false', (string) $array[0][1]);

        $this->assertEquals('false', (string) $array[1][0]);
        $this->assertEquals('true', (string) $array[1][1]);
    }

    public function testDynamicMultiDimensionArrayBooleans()
    {
        $array = $this->getDynamicField('d_ma_b');
        $this->assertCount(2, $array);
        $this->assertCount(2, $array[0]);
        $this->assertCount(2, $array[1]);

        $this->assertEquals('true', (string) $array[0][0]);
        $this->assertEquals('false', (string) $array[0][1]);

        $this->assertEquals('false', (string) $array[1][0]);
        $this->assertEquals('true', (string) $array[1][1]);
    }
}
