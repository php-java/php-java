<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

class QuickSortTest extends Base
{
    protected $fixtures = [
        'QuickSortTest',
    ];

    public function testQuickSortAsc()
    {
        $calculatedValue = static::$initiatedJavaClasses['QuickSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'asc',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/QuickSortAsc.txt'),
            $result
        );
    }

    public function testQuickSortDesc()
    {
        $calculatedValue = static::$initiatedJavaClasses['QuickSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'desc',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/QuickSortDesc.txt'),
            $result
        );
    }
}
