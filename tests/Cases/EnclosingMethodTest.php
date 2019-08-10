<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $result = StandardIO::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
