<?php
namespace PHPJava\Core\JVM\Validations;

class MagicByte implements ValidatorInterface
{
    private const CAFEBABE = 0xCAFEBABE;

    /**
     * @var int
     */
    private $magicByte;

    public function __construct($magicByte)
    {
        $this->magicByte = (int) $magicByte;
    }

    public function isValid(): bool
    {
        return static::CAFEBABE === $this->magicByte ?? 0;
    }
}
