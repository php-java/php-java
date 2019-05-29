<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Long;

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
        ob_start();
        $this->call(
            'longMethod',
            new _Long(1234)
        );

        $result = (int) ob_get_clean();
        $this->assertEquals(1234, $result);
    }

    public function testCallToMethodIncludingByteParamsByStrictMode()
    {
        ob_start();
        $this->call(
            'byteMethod',
            new _Byte(32)
        );

        $result = (int) ob_get_clean();
        $this->assertEquals(32, $result);
    }

    public function testCallToMethodIncludingCharParamsByStrictMode()
    {
        ob_start();
        $this->call(
            'charMethod',
            new _Char('a')
        );

        $result = rtrim(ob_get_clean());
        $this->assertEquals('a', $result);
    }

    public function testCallToMethodIncludingDoubleParamsByStrictMode()
    {
        ob_start();
        $this->call(
            'doubleMethod',
            new _Double(0.01)
        );

        $result = rtrim(ob_get_clean());
        $this->assertEquals('0.01', $result);
    }

    public function testCallToMethodIncludingLongParamsByAmbiguousMode()
    {
        ob_start();
        $this->callWithAmbiguous(
            'longMethod',
            1234
        );

        $result = (int) ob_get_clean();
        $this->assertEquals(1234, $result);
    }

    public function testCallToMethodIncludingByteParamsByAmbiguousMode()
    {
        ob_start();
        $this->callWithAmbiguous(
            'byteMethod',
            32
        );

        $result = (int) ob_get_clean();
        $this->assertEquals(32, $result);
    }

    public function testCallToMethodIncludingCharParamsByAmbiguousMode()
    {
        ob_start();
        $this->callWithAmbiguous(
            'charMethod',
            'a'
        );

        $result = rtrim(ob_get_clean());
        $this->assertEquals('a', $result);
    }

    public function testCallToMethodIncludingDoubleParamsByAmbiguousMode()
    {
        ob_start();
        $this->callWithAmbiguous(
            'doubleMethod',
            0.01
        );

        $result = rtrim(ob_get_clean());
        $this->assertEquals('0.01', $result);
    }
}
