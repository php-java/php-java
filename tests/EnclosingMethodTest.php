<?php
namespace PHPJava\Tests;

class EnclosingMethodTest extends Base
{
    protected $fixtures = [
        'EnclosingMethodTest',
    ];

    public function testEnclosingMethod()
    {
        ob_start();
        $this->initiatedJavaClasses['EnclosingMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }
}
