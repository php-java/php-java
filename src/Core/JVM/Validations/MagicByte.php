<?php
namespace PHPJava\Core\JVM\Validations;

use PHPJava\Utilities\BinaryTool;

class MagicByte implements ValidatorInterface
{
    private const CAFEBABE = 'CAFEBABE';
    private $magicByte;

    public function __construct($magicByte)
    {
        $this->magicByte = $magicByte;
    }

    public function isValid(): bool
    {
        return static::CAFEBABE === BinaryTool::toHex($this->magicByte ?? null);
    }
}
