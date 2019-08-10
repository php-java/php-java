<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

class FizzBuzzTest extends Base
{
    protected $fixtures = [
        'FizzBuzzTest',
    ];

    public function testCallMain()
    {
        $calculatedValue = static::$initiatedJavaClasses['FizzBuzzTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                ['100']
            );
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/FizzBuzzTest.txt'),
            $result
        );
    }
}
