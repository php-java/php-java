<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\PrintTool;

class BubbleSortTest extends Base
{
    protected $fixtures = [
        'BubbleSortTest',
    ];

    public function testBubbleSortAsc()
    {
        $calculatedValue = static::$initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('asc');
        $result = PrintTool::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortAsc.txt'),
            $result
        );
    }

    public function testBubbleSortDesc()
    {
        $calculatedValue = static::$initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('desc');
        $result = PrintTool::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortDesc.txt'),
            $result
        );
    }

    public function testBubbleSortAscByParam()
    {
        $calculatedValue = static::$initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ascByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = PrintTool::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortAsc.txt'),
            $result
        );
    }

    public function testBubbleSortDescByParam()
    {
        $calculatedValue = static::$initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'descByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = PrintTool::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortDesc.txt'),
            $result
        );
    }
}
