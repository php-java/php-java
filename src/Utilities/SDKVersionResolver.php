<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\UnknownVersionException;

class SDKVersionResolver
{
    /**
     * @throws UnknownVersionException
     */
    public static function resolve(string $version): string
    {
        if (version_compare($version, '45.0', '>=') &&
            version_compare($version, '45.3', '<=')
        ) {
            return '1.0.2';
        }

        if (version_compare($version, '45.65535', '<=')) {
            return '1.1';
        }

        if (version_compare($version, '46.0', '<=')) {
            return '1.2';
        }

        if (version_compare($version, '47.0', '<=')) {
            return '1.3';
        }

        if (version_compare($version, '48.0', '<=')) {
            return '1.4';
        }

        if (version_compare($version, '49.0', '<=')) {
            return '5.0';
        }

        if (version_compare($version, '50.0', '<=')) {
            return '6';
        }

        if (version_compare($version, '51.0', '<=')) {
            return '7';
        }

        if (version_compare($version, '52.0', '<=')) {
            return '8';
        }

        if (version_compare($version, '53.0', '<=')) {
            return '9';
        }

        if (version_compare($version, '54.0', '<=')) {
            return '10';
        }

        if (version_compare($version, '55.0', '<=')) {
            return '11';
        }
        throw new UnknownVersionException('Unsupported JDK version ' . $version);
    }
}
