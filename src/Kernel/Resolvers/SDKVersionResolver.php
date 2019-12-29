<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Exceptions\UnknownVersionException;

class SDKVersionResolver
{
    const VERSION_MAP = [
        '45.3' => '1.0.2',
        '45.65535' => '1.1',
        '46.0' => '1.2',
        '47.0' => '1.3',
        '48.0' => '1.4',
        '49.0' => '5.0',
        '50.0' => '6',
        '51.0' => '7',
        '52.0' => '8',
        '53.0' => '9',
        '54.0' => '10',
        '55.0' => '11',
    ];

    public static function resolveByVersion(string $version): array
    {
        $version = array_flip(static::VERSION_MAP)[$version] ?? null;

        if (isset($version)) {
            [$majorVersion, $minorVersion] = explode('.', $version);
            return [
                (int) $majorVersion,
                (int) $minorVersion,
            ];
        }
        throw new UnknownVersionException('Unsupported JDK version ' . $version);
    }

    /**
     * @throws UnknownVersionException
     */
    public static function resolve(string $version): string
    {
        if (isset(static::VERSION_MAP[$version])) {
            return static::VERSION_MAP[$version];
        }
        throw new UnknownVersionException('Unsupported JDK version ' . $version);
    }
}
