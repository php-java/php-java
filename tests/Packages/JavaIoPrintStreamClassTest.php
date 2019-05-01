<?php
namespace PHPJava\Tests\Packages\java\io;

use PHPJava\Core\JavaArchive;
use PHPJava\Tests\Base;
use PHPUnit\Framework\TestCase;

class JavaIoPrintStreamClassTest extends Base
{
    protected $fixtures = [
        'JavaIoPrintStreamClassTest',
    ];

    private function call($method, ...$arguments)
    {
        ob_start();
        $this->initiatedJavaClasses['JavaIoPrintStreamClassTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $method,
                ...$arguments
            );
        return ob_get_clean();
    }

    public function testPrintlnWithStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("Hello World\n", $result);
    }

    public function testPrintlnWithCharParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("65\n", $result);
    }

    public function testPrintlnWithCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("ABC\n", $result);
    }

    public function testPrintlnWithFloatParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertStringContainsString("0.123", $result);
    }

    public function testPrintlnWithDoubleParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("0.123\n", $result);
    }

    public function testPrintlnWithBooleanParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1] . '_true');
        $this->assertEquals("1\n", $result);

        $result = $this->call(explode('::', __METHOD__)[1] . '_false');
        $this->assertEquals("0\n", $result);
    }

    public function testPrintWithStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("Hello World", $result);
    }

    public function testPrintWithCharParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("65", $result);
    }

    public function testPrintWithCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("ABC", $result);
    }

    public function testPrintWithFloatParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertStringContainsString("0.123", $result);
    }

    public function testPrintWithDoubleParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("0.123", $result);
    }

    public function testPrintWithBooleanParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1] . '_true');
        $this->assertEquals("1", $result);

        $result = $this->call(explode('::', __METHOD__)[1] . '_false');
        $this->assertEquals("0", $result);
    }
}