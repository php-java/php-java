<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang;

class Throwable extends \Exception
{
    use \PHPJava\Packages\PHPJava\Extended\Object_;

    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return $this->getMessage();
    }
}
