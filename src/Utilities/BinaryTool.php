<?php
namespace PHPJava\Utilities;

class BinaryTool
{
    final public static function toHex($data)
    {
        if (is_int($data)) {
            return sprintf('%X', $data);
        }
        return strtoupper(base_convert($data, 10, 16));
    }

    final public static function reverseBits($bits)
    {
        $bitSize = strlen($bits);

        // reverse
        for ($i = 0; $i < $bitSize; $i++) {
            $bits[$i] = $bits[$i] === '0' ? '1' : '0';
        }

        return $bits;
    }

    final public static function addOneBit($bits)
    {
        $bitSize = strlen($bits);

        for ($index = $bitSize - 1; $index >= 0 && $bits[$index] === '1'; $index--) {
            // nop
        }

        $bits[$index] = '1';
        for ($i = $index + 1; $i < $bitSize; $i++) {
            $bits[$i] = '0';
        }

        return $bits;
    }

    final public static function toSigned($value, $bytes)
    {
        $value = (int) $value;
        $convert = base_convert((string) $value, 10, 2);
        $bitSize = strlen($convert);

        if ($bitSize < ($bytes * 8) || $convert[0] !== '1') {
            return $value;
        }

        return '-' . base_convert(self::addOneBit(self::reverseBits($convert)), 2, 10);
    }

    final public static function negate($value, $bytes)
    {
        $value = (int) $value;
        $value = base_convert((string) $value, 10, 2);

        if (sprintf('%0' . $bytes . 's', $value) === str_repeat('0', $bytes)) {
            // zero number was overflow
            return '0';
        }

        $convert = self::addOneBit(self::reverseBits($value));
        return ($convert[0] === '1' ? '-' : '') . base_convert($convert, 2, 10);
    }

    final public static function multiply($value1, $value2)
    {
        if (function_exists('gmp_mul')) {
            $a = gmp_init($value1);
            $b = gmp_init($value2);
            return gmp_strval(gmp_mul($a, $b));
        }

        return $value1 * $value2;
    }

    final public static function add($value1, $value2)
    {
        if (function_exists('gmp_add')) {
            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_add($a, $b));
        }
        return $value1 + $value2;
    }

    final public static function sub($value1, $value2)
    {
        if (function_exists('gmp_sub')) {
            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_sub($a, $b));
        }
        return $value1 - $value2;
    }

    final public static function div($value1, $value2)
    {
        if (function_exists('gmp_div')) {
            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_div($a, $b));
        }

        return $value1 / $value2;
    }

    final public static function shiftLeft($value1, $value2)
    {
        $value1 = (int) $value1;
        $value2 = (int) $value2;

        if (function_exists('gmp_mul')) {
            return gmp_strval(gmp_mul($value1, gmp_pow(2, $value2)));
        }

        return $value1 << $value2;
    }

    final public static function unsignedShiftRight($value1, $value2, $bytes)
    {
        $value1 = (int) $value1;
        $value2 = (int) $value2;
        $bits = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));

        $bits = sprintf('%0' . ($bytes * 8) . 's', substr($bits, 0, strlen($bits) - $value2));

        if ($bits === '') {
            $bits = '0';
        }

        return base_convert($bits, 2, 10);
    }

    final public static function shiftRight($value1, $value2, $bytes)
    {
        return self::toSigned(self::unsignedShiftRight($value1, $value2, $bytes), $bytes);
    }

    final public static function orBits($value1, $value2, $bytes)
    {
        $value1 = (int) $value1;
        $value2 = (int) $value2;
        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {
            $build .= ($value1[$i] === '1' || $value2[$i] == '1') ? '1' : '0';
        }

        return base_convert($build, 2, 10);
    }

    final public static function xorBits($value1, $value2, $bytes)
    {
        $value1 = (int) $value1;
        $value2 = (int) $value2;
        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {
                $build .= (($value1[$i] === '1' && $value2[$i] === '0') || ($value1[$i] === '0' && $value2[$i] === '1')) ? '1' : 0;
        }

        return base_convert($build, 2, 10);
    }

    final public static function andBits($value1, $value2, $bytes)
    {
        $value1 = (int) $value1;
        $value2 = (int) $value2;
        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {
            $build .= $value1[$i] === '1' && $value2[$i] === '1' ? '1' : '0';
        }

        return base_convert($build, 2, 10);
    }

    final public static function convertDoubleToIEEE754($doubleValue)
    {
        $bits = $doubleValue;
        $s = ($bits >> 63) == 0 ? 1 : -1;
        $e = ($bits >> 52) & 0x7ff;
        $m = ($e == 0) ? (($bits & 0xfffffffffffff) << 1) : ($bits & 0xfffffffffffff) | 0x10000000000000;
        return $s * $m * pow(2, $e - 1075);
    }

    final public static function convertFloatToIEEE754($floatValue)
    {
        $bits = $floatValue;
        $s = ($bits >> 31) == 0 ? 1 : -1;
        $e = ($bits >> 23) & 0xff;
        $m = ($e == 0) ? (($bits & 0x7fffff) << 1) : ($bits & 0x7fffff) | 0x800000;
        return $s * $m * pow(2, $e - 150);
    }
}
