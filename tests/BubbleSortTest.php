<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends Base
{
    protected $fixtures = [
        'BubbleSortTest',
    ];

    public function testBubbleSortAsc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('asc');
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortAsc.txt'),
            $result
        );
    }

    public function testBubbleSortDesc()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('desc');
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortDesc.txt'),
            $result
        );
    }

    public function testBubbleSortAscByParam()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'ascByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortAsc.txt'),
            $result
        );
    }

    public function testBubbleSortDescByParam()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['BubbleSortTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'descByParam',
                [-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50]
            );
        $result = ob_get_clean();
        $this->assertEquals(
            file_get_contents(__DIR__ . '/templates/BubbleSortDesc.txt'),
            $result
        );
    }
}
