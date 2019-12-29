<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class StructureTest extends Base
{
    use JavaRunnable;

    public function testUseStatement()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testUseStatementWithNamespace()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__, 'PHPJava.UseStatement');

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testDeclareStatement()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testDeclareStatementWithNamespace()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__, 'PHPJava.DeclareStatement');

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }
}
