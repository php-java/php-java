<?php
namespace PHPJava\Tests;

use PHPJava\Core\JVM\Parameters\GlobalOptions;

class OutputDebugTraceTest extends Base
{
    protected $fixtures = [
        'OutputDebugTraceTest',
    ];

    public function testCallMain()
    {
        ob_start();

        GlobalOptions::set([
            'operations' => [
                'enable_trace' => true,
            ],
        ]);

        $calculatedValue = static::$initiatedJavaClasses['OutputDebugTraceTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['Hello', ' ', 'World']
            );
        ob_end_clean();

        ob_start();
        static::$initiatedJavaClasses['OutputDebugTraceTest']->debug();
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/DebugTraceTest.txt'),
            $result
        );

        GlobalOptions::reset();
    }
}
