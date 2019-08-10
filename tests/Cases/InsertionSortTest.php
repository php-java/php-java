<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

class InsertionSortTest extends Base
{
    protected $fixtures = [
        'InsertionSortTest',
    ];

    public function testInsertionSortAsc()
    {
        $calculatedValue = static::$initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('asc');
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortAsc.txt'),
            $result
        );
    }

    public function testInsertionSortDesc()
    {
        $calculatedValue = static::$initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('desc');
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortDesc.txt'),
            $result
        );
    }

    public function testInsertionSortAscByParam()
    {
        $calculatedValue = static::$initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ascByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortAsc.txt'),
            $result
        );
    }

    public function testInsertionSortDescByParam()
    {
        $calculatedValue = static::$initiatedJavaClasses['InsertionSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'descByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = StandardIO::getHeapspace();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/InsertionSortDesc.txt'),
            $result
        );
    }
}
