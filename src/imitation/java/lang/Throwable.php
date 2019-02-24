<?php
namespace PHPJava\Imitation\java\lang;

class Throwable extends \Exception
{
    use \PHPJava\Imitation\PHPJava\Extended\_Object;

    public function __toString(): string
    {
        return $this->getMessage();
    }
}
