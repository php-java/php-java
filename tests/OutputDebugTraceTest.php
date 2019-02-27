<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class OutputDebugTraceTest extends Base
{
    protected $fixtures = [
        'OutputDebugTraceTest',
    ];

    public function testCallMain()
    {
        ob_start();

        $calculatedValue = $this->initiatedJavaClasses['OutputDebugTraceTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ["Hello", " ", "World"]
            );
        ob_end_clean();

        ob_start();
        $this->initiatedJavaClasses['OutputDebugTraceTest']->debug();
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/DebugTraceTest.txt'),
            $result
        );
    }
}
