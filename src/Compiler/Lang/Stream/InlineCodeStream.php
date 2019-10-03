<?php
namespace PHPJava\Compiler\Lang\Stream;

class InlineCodeStream extends AbstractStream
{
    public function __construct($source)
    {
        $this->source = $source;
    }
}
