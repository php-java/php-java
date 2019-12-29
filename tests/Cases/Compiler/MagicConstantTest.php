<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class MagicConstantTest extends Base
{
    use JavaRunnable;

    public function testMagicConstMethod()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(
            'TestMagicConstMethod::main',
            $output[0]
        );
    }

    public function testMagicConstClass()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(
            'TestMagicConstClass',
            $output[0]
        );
    }

    public function testMagicConstLine()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(
            '10',
            $output[0]
        );
    }

    public function testMagicConstDir()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertRegExp(
            '#php-java/tests/Cases/Compiler/Codes$#',
            $output[0]
        );
    }

    public function testMagicConstFile()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertRegExp(
            '#php-java/tests/Cases/Compiler/Codes/TestMagicConstFile.php$#',
            $output[0]
        );
    }
}
