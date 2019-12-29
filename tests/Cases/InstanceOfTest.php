<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

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
        $result = Output::getHeapspace();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }

    public function testInstanceOfObject()
    {
        $this->call('instanceOfObject');
        $result = Output::getHeapspace();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }
}
