<?php
namespace PHPJava\Utilities;

class CompareTool
{
    public static function compareClassName(string $a, string $b): bool
    {
        $a = Formatter::convertPHPNamespacesToJava($a);
        $b = Formatter::convertPHPNamespacesToJava($b);
        return $a === $b;
    }
}
