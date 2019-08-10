<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPJava\Utilities\StandardIO;

class MethodParameterTest extends Base
{
    protected $fixtures = [
        'MethodParameterTest',
    ];

    public function testPassParameterIsEmpty()
    {
        $e = null;
        try {
            $value = static::$initiatedJavaClasses['MethodParameterTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'main'
                );
        } catch (NoSuchMethodException $e) {
            $e = get_class($e);
        }

        $this->assertEquals(
            NoSuchMethodException::class,
            $e
        );
    }

    public function testMethodParameterIsEmpty()
    {
        $value = static::$initiatedJavaClasses['MethodParameterTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'noParameterMethod'
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals('Hello World!', $result);
    }

    public function testPassParameterToNoParameterMethod()
    {
        $e = null;
        try {
            $value = static::$initiatedJavaClasses['MethodParameterTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'noParameterMethod',
                    1234,
                    5678
                );
        } catch (NoSuchMethodException $e) {
            $e = get_class($e);
        }

        $this->assertEquals(
            NoSuchMethodException::class,
            $e
        );
    }
}
