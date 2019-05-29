<?php
namespace PHPJava\Tests;

class FizzBuzzTest extends Base
{
    protected $fixtures = [
        'FizzBuzzTest',
    ];

    public function testCallMain()
    {
        ob_start();

        $calculatedValue = static::$initiatedJavaClasses['FizzBuzzTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['100']
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/FizzBuzzTest.txt'),
            $result
        );
    }
}
