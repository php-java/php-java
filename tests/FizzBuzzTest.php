<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends Base
{
    protected $fixtures = [
        'FizzBuzzTest',
    ];

    public function testCallMain()
    {
        ob_start();

        $calculatedValue = $this->initiatedJavaClasses['FizzBuzzTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ["100"]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/FizzBuzzTest.txt'),
            $result
        );
    }
}
