<?php
namespace PHPJava\Tests;

class InstanceOfTest extends Base
{
    protected $fixtures = [
        'InstanceOfTest',
    ];

    private function call($method)
    {
        return $this->initiatedJavaClasses['InstanceOfTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call($method);
    }

    public function testInstanceOfString()
    {
        ob_start();
        $this->call('instanceOfString');
        $result = ob_get_clean();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }

    public function testInstanceOfObject()
    {
        ob_start();
        $this->call('instanceOfObject');
        $result = ob_get_clean();
        $this->assertEquals(
            "Hello World\n",
            $result
        );
    }
}
