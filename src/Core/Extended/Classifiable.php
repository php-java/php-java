<?php
declare(strict_types=1);
namespace PHPJava\Core\Extended;

use PHPJava\Packages\java\lang\_Class;

trait Classifiable
{
    public function getClass()
    {
        return new _Class($this);
    }
}
