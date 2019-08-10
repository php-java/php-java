<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

class InstanceOfTest extends Base
{
    protected $fixtures = [
        'InstanceOfTest',
    ];

    private function call($method)
    {
        return static::$initiatedJavaClasses['InstanceOfTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method);
    }

    public function testInstanceOfString()
    {
        $this->call('instanceOfString');
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }

    public function testInstanceOfObject()
    {
        $this->call('instanceOfObject');
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }
}
