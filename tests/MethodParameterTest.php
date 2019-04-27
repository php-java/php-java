<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPUnit\Framework\TestCase;

class MethodParameterTest extends Base
{
    protected $fixtures = [
        'MethodParameterTest',
    ];

    public function testPassParameterIsEmpty()
    {
        $e = null;
        try {
            $value = $this->initiatedJavaClasses['MethodParameterTest']
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
        $value = $this->initiatedJavaClasses['MethodParameterTest']
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
            $value = $this->initiatedJavaClasses['MethodParameterTest']
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
