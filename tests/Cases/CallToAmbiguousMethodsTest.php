<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Long_;

class CallToAmbiguousMethodsTest extends Base
{
    protected $fixtures = [
        'CallToAmbiguousMethodsTest',
    ];

    private $ambiguousInitiatedClass;

    public function setUp(): void
    {
        parent::setUp();
        GlobalOptions::set(
            [
                'strict' => false,
            ]
        );
        $this->ambiguousInitiatedClass = new \PHPJava\Core\JavaClass(
            new JavaCompiledClass(
                new \PHPJava\Core\Stream\Reader\FileReader(
                    $this->getClassName($this->fixtures[0])
                )
            )
        );
    }

    private function call($name, ...$parameters)
    {
        return static::$initiatedJavaClasses['CallToAmbiguousMethodsTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    private function callWithAmbiguous($name, ...$parameters)
    {
        return $this->ambiguousInitiatedClass
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $name,
                ...$parameters
            );
    }

    public function testCallToMethodIncludingLongParamsByStrictMode()
    {
        $this->call(
            'longMethod',
            new Long_(1234)
        );

        $result = (int) Output::getHeapspace();
        $this->assertEquals(1234, $result);
    }

    public function testCallToMethodIncludingByteParamsByStrictMode()
    {
        $this->call(
            'byteMethod',
            new Byte_(32)
        );

        $result = (int) Output::getHeapspace();
        $this->assertEquals(32, $result);
    }

    public function testCallToMethodIncludingCharParamsByStrictMode()
    {
        $this->call(
            'charMethod',
            new Char_('a')
        );

        $result = rtrim(Output::getHeapspace());
        $this->assertEquals('a', $result);
    }

    public function testCallToMethodIncludingDoubleParamsByStrictMode()
    {
        $this->call(
            'doubleMethod',
            new Double_(0.01)
        );

        $result = rtrim(Output::getHeapspace());
        $this->assertEquals('0.01', $result);
    }

    public function testCallToMethodIncludingLongParamsByAmbiguousMode()
    {
        $this->callWithAmbiguous(
            'longMethod',
            1234
        );

        $result = (int) Output::getHeapspace();
        $this->assertEquals(1234, $result);
    }

    public function testCallToMethodIncludingByteParamsByAmbiguousMode()
    {
        $this->callWithAmbiguous(
            'byteMethod',
            32
        );

        $result = (int) Output::getHeapspace();
        $this->assertEquals(32, $result);
    }

    public function testCallToMethodIncludingCharParamsByAmbiguousMode()
    {
        $this->callWithAmbiguous(
            'charMethod',
            'a'
        );

        $result = rtrim(Output::getHeapspace());
        $this->assertEquals('a', $result);
    }

    public function testCallToMethodIncludingDoubleParamsByAmbiguousMode()
    {
        $this->callWithAmbiguous(
            'doubleMethod',
            0.01
        );

        $result = rtrim(Output::getHeapspace());
        $this->assertEquals('0.01', $result);
    }
}
