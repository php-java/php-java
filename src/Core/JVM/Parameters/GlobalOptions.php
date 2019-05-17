<?php
namespace PHPJava\Core\JVM\Parameters;

final class GlobalOptions
{
    /**
     * @var array
     */
    private static $settings = [];

    public static function set($values)
    {
        static::$settings = static::merge(
            static::$settings,
            $values
        );
    }

    public static function get($name)
    {
        $ref = static::$settings;
        foreach (explode('.', $name) as $path) {
            $ref = $ref[$path] ?? null;
            if ($ref === null) {
                return null;
            }
        }
        return $ref;
    }

    public static function reset()
    {
        static::$settings = [];
    }

    private static function merge(array &$array1, array &$array2)
    {
        $merged = $array1;
        foreach ($array2 as $key => &$value) {
            if (isset($merged[$key]) &&
                is_array($value) &&
                is_array($merged[$key])
            ) {
                $merged[$key] = static::merge(
                    $merged[$key],
                    $value
                );
                continue;
            }
            $merged[$key] = $value;
        }
        return $merged;
    }
}
