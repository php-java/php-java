<?php
namespace PHPJava\Tests\Cases;

class GetFieldTest extends Base
{
    protected $fixtures = [
        'GetFieldTest',
    ];

    public function testGetField()
    {
        $actual = static::$initiatedJavaClasses['GetFieldTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('getField')
            ->getValue();

        $this->assertEquals(1, $actual);
    }
}
