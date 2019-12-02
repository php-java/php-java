<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class EntrypointTest extends Base
{
    use JavaRunnable;

    public function testGenerateEntrypoint()
    {
        [$output, $return] = $this->runJavaEntryPointTest(__METHOD__);
        $this->assertSame(
            0,
            $return
        );
        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testCallOutsideStatementOfClasses()
    {
        [$output, $return] = $this->runJavaEntryPointTest(__METHOD__);
        $this->assertSame(
            0,
            $return
        );
        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testCallOutsideStatementOfClassesWithNamespace()
    {
        [$output, $return] = $this->runJavaEntryPointTest(
            __METHOD__,
            'PHPJava.Test.Entrypoint'
        );
        $this->assertSame(
            0,
            $return
        );
        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }
}
