<?php
namespace PHPJava\Tests\Packages\PHPJava\Extended\_Object;

use PHPJava\Packages\java\lang\CloneNotSupportedException;

class _ObjectTest extends Base
{
    public function testClone()
    {
        $this->expectException(CloneNotSupportedException::class);

        clone new class() {
            use \PHPJava\Packages\PHPJava\Extended\_Object;
        };
    }
}
