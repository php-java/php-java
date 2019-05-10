<?php
namespace PHPJava\Tests;

class IntConstTest extends Base
{
    protected $fixtures = [
        'IntConstTest',
    ];

    private function call($method)
    {
        $calculatedValue = $this->initiatedJavaClasses['IntConstTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method);

        return $calculatedValue->getValue();
    }

    public function testIntConst0()
    {
        $actual = $this->call('intConst0');
        $this->assertEquals(0, $actual);
    }

    public function testIntConst1()
    {
        $actual = $this->call('intConst1');
        $this->assertEquals(1, $actual);
    }

    public function testIntConst2()
    {
        $actual = $this->call('intConst2');
        $this->assertEquals(2, $actual);
    }

    public function testIntConst3()
    {
        $actual = $this->call('intConst3');
        $this->assertEquals(3, $actual);
    }

    public function testIntConst4()
    {
        $actual = $this->call('intConst4');
        $this->assertEquals(4, $actual);
    }

    public function testIntConst5()
    {
        $actual = $this->call('intConst5');
        $this->assertEquals(5, $actual);
    }

    public function testIntConstM1()
    {
        $actual = $this->call('intConstM1');
        $this->assertEquals(-1, $actual);
    }

    public function testIntPush123()
    {
        $actual = $this->call('intPush123');
        $this->assertEquals(123, $actual);
    }
}
