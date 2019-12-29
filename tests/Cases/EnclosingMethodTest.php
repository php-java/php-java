<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

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
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
