<?php
namespace PHPJava\Tests;

class ArrayTest extends Base
{
    protected $fixtures = [
        'ArrayTest',
    ];

    private function call($method)
    {
        return $this->initiatedJavaClasses['ArrayTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method);
    }

    public function testCreateIntArray()
    {
        $actual = $this->call('createIntArray');

        $this->assertEquals(3, $actual->count());
        $this->assertEquals(1, $actual->offsetGet(0)->getValue());
        $this->assertEquals(2, $actual->offsetGet(1)->getValue());
        $this->assertEquals(3, $actual->offsetGet(2)->getValue());
    }

    public function testCreateStringArray()
    {
        $actual = $this->call('createStringArray');

        $this->assertEquals(3, $actual->count());
        $this->assertEquals('foo', $actual->offsetGet(0));
        $this->assertEquals('bar', $actual->offsetGet(1));
        $this->assertEquals('baz', $actual->offsetGet(2));
    }
}
