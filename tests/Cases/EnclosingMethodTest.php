<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

class EnclosingMethodTest extends Base
{
    protected $fixtures = [
        'EnclosingMethodTest',
    ];

    public function testEnclosingMethod()
    {
        static::$initiatedJavaClasses['EnclosingMethodTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = PrintTool::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
