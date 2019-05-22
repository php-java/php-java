<?php
namespace PHPJava\Core\Traits;

use PHPJava\Packages\java\lang\_Class;

trait Classifiable
{
    public function getClass()
    {
        return new _Class($this);
    }
}
