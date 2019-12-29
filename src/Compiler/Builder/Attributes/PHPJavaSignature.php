<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Core\JVM\Stream\BinaryWriter;
use PHPJava\Core\PHPJava;

class PHPJavaSignature extends Attribute
{
    public function getValue(): string
    {
        $writer = new BinaryWriter(
            fopen('php://memory', 'r+')
        );

        // PHPJava build Version
        $writer->writeUnsignedShort(PHPJava::VERSION);

        // PHP Version
        $phpVersion = PHP_VERSION;
        $writer->writeUnsignedByte(strlen($phpVersion));
        $writer->write($phpVersion);

        // PHP Built Platform
        $phpBuiltPlatform = php_uname();
        $writer->writeUnsignedByte(strlen($phpBuiltPlatform));
        $writer->write($phpBuiltPlatform);

        return $writer->getStreamContents();
    }
}
