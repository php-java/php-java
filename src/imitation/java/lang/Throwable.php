<?php
namespace PHPJava\Imitation\java\lang;

class Throwable extends \Exception
{
    use \PHPJava\Imitation\PHPJava\Extended\_Object;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return $this->getMessage();
    }
}
