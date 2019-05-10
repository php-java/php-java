<?php
namespace PHPJava\Tests;

class QuickSortTest extends Base
{
    protected $fixtures = [
        'QuickSortTest',
    ];

    public function testQuickSortAsc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['QuickSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'asc',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/QuickSortAsc.txt'),
            $result
        );
    }

    public function testQuickSortDesc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['QuickSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'desc',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/QuickSortDesc.txt'),
            $result
        );
    }
}
