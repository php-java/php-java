<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;

class JarTest extends Base
{
    protected $fixtures = [
        'OuterClassTest',
    ];

    public function setUp(): void
    {
        parent::setUp();
        exec('cd ' . __DIR__ . '/caches && jar -cvfe JarTest.jar OuterClassTest OuterClassTest.class');
    }

    public function testCallWithEntryPoint()
    {
        ob_start();
        (new JavaArchive(__DIR__ . '/caches/JarTest.jar'))->execute();
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
}
