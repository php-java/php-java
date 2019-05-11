<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;

class JarTest extends Base
{
    protected $fixtures = [
        'OuterClassTest',
        'JarCalleeTest',
        'JarCallerTest',
        'CalleeEnclosingMethodInJarTest',
        'CallerEnclosingMethodInJarTest',
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this
            ->createJAR(
                'JarTest.jar',
                'OuterClassTest',
                [
                    'OuterClassTest',
                ]
            )
            ->createJAR(
                'JarCallTest.jar',
                'JarCallerTest',
                [
                    'JarCalleeTest',
                    'JarCallerTest',
                ]
            )
            ->createJAR(
                'CallEnclosingMethodInJarTest.jar',
                'CallerEnclosingMethodInJarTest',
                [
                    'CalleeEnclosingMethodInJarTest',
                    'CallerEnclosingMethodInJarTest',
                ]
            );
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

    public function testEnclosingMethodInJar()
    {
        ob_start();
        (new JavaArchive(__DIR__ . '/caches/CallEnclosingMethodInJarTest.jar'))
            ->getClassByName('CallerEnclosingMethodInJarTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }
}
