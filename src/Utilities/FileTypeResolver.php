<?php
namespace PHPJava\Utilities;

class FileTypeResolver
{
    public static function resolve($path): string
    {
        if (preg_match('/\.class$/', $path)) {
            return ClassResolver::RESOLVED_TYPE_CLASS;
        }
        if (preg_match('/\.jar$/', $path)) {
            return ClassResolver::RESOURCE_TYPE_JAR;
        }
        if (is_dir($path)) {
            return ClassResolver::RESOURCE_TYPE_FILE;
        }
    }
}
