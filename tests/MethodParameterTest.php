<?php
namespace PHPJava\Tests;

use PHPJava\Packages\java\lang\NoSuchMethodException;

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
        ob_start();
        $value = static::$initiatedJavaClasses['MethodParameterTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'noParameterMethod'
            );
        $result = ob_get_clean();

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
