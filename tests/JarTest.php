<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;

class JarTest extends Base
{
    protected $fixtures = [
        'OuterClassTest',
        'JarCalleeTest',
        'JarCallerTest',
    ];

    public function setUp(): void
    {
        parent::setUp();
        exec('cd ' . __DIR__ . '/caches && jar -cvfe JarTest.jar OuterClassTest OuterClassTest.class');
        exec('cd ' . __DIR__ . '/caches && jar -cvfe JarCallTest.jar JarCallerTest JarCalleeTest.class JarCallerTest.class');
    }

    public function testCallWithEntryPoint()
    {
        ob_start();
        (new JavaArchive(__DIR__ . '/caches/JarTest.jar'))->execute([]);
        $result = ob_get_clean();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }

    public function testCallWithTargetedMethod()
    {
        ob_start();
        (new JavaArchive(__DIR__ . '/caches/JarTest.jar'))
            ->getClassByName('OuterClassTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }

    public function testSamePlaceClass()
    {
        ob_start();
        (new JavaArchive(__DIR__ . '/caches/JarCallTest.jar'))
            ->getClassByName('JarCallerTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("TEST\n", $result);
    }
}
