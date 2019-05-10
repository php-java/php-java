<?php
namespace PHPJava\Tests;

class InsertionSortTest extends Base
{
    protected $fixtures = [
        'InsertionSortTest',
    ];

    public function testInsertionSortAsc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('asc');
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortAsc.txt'),
            $result
        );
    }

    public function testInsertionSortDesc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('desc');
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortDesc.txt'),
            $result
        );
    }

    public function testInsertionSortAscByParam()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ascByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortAsc.txt'),
            $result
        );
    }

    public function testInsertionSortDescByParam()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'descByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortDesc.txt'),
            $result
        );
    }
}
