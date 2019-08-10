<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Core\JavaArchive;
use PHPJava\IO\Standard\Output;

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
        (new JavaArchive(__DIR__ . '/caches/JarTest.jar'))->execute([]);
        $result = Output::getHeapspace();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }

    public function testCallWithTargetedMethod()
    {
        (new JavaArchive(__DIR__ . '/caches/JarTest.jar'))
            ->getClassByName('OuterClassTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();

        $this->assertEquals(
            'Called Static Method AND Called Dynamic Method',
            $result
        );
    }

    public function testSamePlaceClass()
    {
        (new JavaArchive(__DIR__ . '/caches/JarCallTest.jar'))
            ->getClassByName('JarCallerTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("TEST\n", $result);
    }

    public function testEnclosingMethodInJar()
    {
        (new JavaArchive(__DIR__ . '/caches/CallEnclosingMethodInJarTest.jar'))
            ->getClassByName('CallerEnclosingMethodInJarTest')
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }
}
