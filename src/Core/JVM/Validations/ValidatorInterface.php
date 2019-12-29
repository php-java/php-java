<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Validations;

interface ValidatorInterface
{
    public function isValid(): bool;
}
