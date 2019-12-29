<?php
namespace PHPJava\Tests\Packages\PHPJava\Extended\Object_;

use PHPJava\Packages\java\lang\CloneNotSupportedException;

class Object_Test extends Base
{
    public function testClone()
    {
        $this->expectException(CloneNotSupportedException::class);

        clone new class() {
            use \PHPJava\Packages\PHPJava\Extended\Object_;
        };
    }
}
