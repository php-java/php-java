<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;
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
        $value = static::$initiatedJavaClasses['MethodParameterTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'noParameterMethod'
            );
        $result = Output::getHeapspace();

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
