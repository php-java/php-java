<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

class OutputDebugTraceTest extends Base
{
    protected $fixtures = [
        'OutputDebugTraceTest',
    ];

    public function testCallMain()
    {
        $calculatedValue = static::$initiatedJavaClasses['OutputDebugTraceTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['Hello', ' ', 'World']
            );

        ob_start();
        static::$initiatedJavaClasses['OutputDebugTraceTest']->debug();
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/DebugTraceTest.txt'),
            $result
        );
    }
}
