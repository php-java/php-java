<?php
namespace PHPJava\Tests\Packages\java\io;

use PHPJava\Exceptions\UncaughtException;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Tests\Cases\Base;
use PHPJava\Utilities\PrintTool;

class JavaIoPrintStreamClassTest extends Base
{
    protected $fixtures = [
        'JavaIoPrintStreamClassTest',
    ];

    protected $expectedSpecialException;

    private function call($method, ...$arguments)
    {
        try {
            static::$initiatedJavaClasses['JavaIoPrintStreamClassTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    $method,
                    ...$arguments
                );
        } catch (UncaughtException $e) {
            $this->expectedSpecialException = get_class($e->getPrevious());
        }
        return PrintTool::getHeapspace();
    }

    public function testPrintlnWithoutParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("\n", $result);
    }

    public function testPrintlnWithStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("Hello World\n", $result);
    }

    public function testPrintlnWithNullStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("null\n", $result);
        $this->assertSame(
            NullPointerException::class,
            $this->expectedSpecialException
        );
    }

    public function testPrintlnWithCharParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("A\n", $result);
    }

    public function testPrintlnWithCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("ABC\n", $result);
    }

    public function testPrintlnWithNullCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("\n", $result);
        $this->assertSame(
            NullPointerException::class,
            $this->expectedSpecialException
        );
    }

    public function testPrintlnWithFloatParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertStringContainsString('0.123', $result);
    }

    public function testPrintlnWithDoubleParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals("0.123\n", $result);
    }

    public function testPrintlnWithBooleanParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1] . '_true');
        $this->assertEquals("true\n", $result);

        $result = $this->call(explode('::', __METHOD__)[1] . '_false');
        $this->assertEquals("false\n", $result);
    }

    public function testPrintWithStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('Hello World', $result);
    }

    public function testPrintWithNullStringParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('null', $result);
        $this->assertSame(
            NullPointerException::class,
            $this->expectedSpecialException
        );
    }

    public function testPrintWithCharParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('A', $result);
    }

    public function testPrintWithCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('ABC', $result);
    }

    public function testPrintWithNullCharArrayParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('', $result);
        $this->assertSame(
            NullPointerException::class,
            $this->expectedSpecialException
        );
    }

    public function testPrintWithFloatParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertStringContainsString('0.123', $result);
    }

    public function testPrintWithDoubleParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1]);
        $this->assertEquals('0.123', $result);
    }

    public function testPrintWithBooleanParams()
    {
        $result = $this->call(explode('::', __METHOD__)[1] . '_true');
        $this->assertEquals('true', $result);

        $result = $this->call(explode('::', __METHOD__)[1] . '_false');
        $this->assertEquals('false', $result);
    }
}
