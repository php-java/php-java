<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class OutputDebugTraceTest extends Base
{
    protected $fixtures = [
        'OutputDebugTraceTest',
    ];

    /**
     * @var \PHPJava\Core\JavaClass
     */
    private $javaClass;

    public function setUp(): void
    {
        parent::setUp();

        $this->javaClass = new \PHPJava\Core\JavaClass(
            new \PHPJava\Core\JavaClassReader($this->getClassName('OutputDebugTraceTest'))
        );
    }

    public function testCallMain()
    {
        ob_start();
        $this->javaClass->getInvoker()->getStaticMethods()->call(
            'main',
            ["Hello", " ", "World"]
        );
        ob_end_clean();

        ob_start();
        $this->javaClass->debug();
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/DebugTraceTest.txt'),
            $result
        );
    }
}
