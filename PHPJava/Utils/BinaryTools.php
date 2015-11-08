<?php

class BinaryTools {

    public final static function toHex ($data) {

        if (is_int($data)) {

            return sprintf('%X', $data);

        }

        return strtoupper(base_convert($data, 10, 16));

    }

    public final static function reverseBits ($bits) {

        $bitSize = strlen($bits);

        // reverse
        for ($i = 0; $i < $bitSize; $i++) {

            if ($bits[$i] === '0') {

                $bits[$i] = '1';

            } else {

                $bits[$i] = '0';

            }

        }

        return $bits;

    }

    public final static function addOneBit ($bits) {

        $bitSize = strlen($bits);

        for ($index = $bitSize - 1; $index >= 0 && $bits[$index] === '1'; $index--) {

            // nop

        }

        if ($index === -1) {

            throw new BinaryToolsException('Passed parameter was overflow');

        }

        $bits[$index] = '1';

        for ($i = $index + 1; $i < $bitSize; $i++) {

            $bits[$i] = '0';

        }


        return $bits;

    }

    public final static function toSigned ($value, $bytes) {

        $convert = base_convert((string) $value, 10, 2);
        $bitSize = strlen($convert);

        if ($bitSize < ($bytes * 8) || $convert[0] !== '1') {

            return $value;

        }

        return '-' . base_convert(self::addOneBit(self::reverseBits($convert)), 2, 10);

    }

    public final static function negate ($value, $bytes) {

        $value = base_convert((string) $value, 10, 2);

        if (sprintf('%0' . $bytes . 's', $value) === str_repeat('0', $bytes)) {

            // zero number was overflow
            return '0';

        }

        $convert = self::addOneBit(self::reverseBits($value));

        if ($convert[0] === '1') {

            $convert = '-' . base_convert($convert, 2, 10);

        } else {

            $convert = base_convert($convert, 2, 10);

        }

        return $convert;

    }

    public final static function multiply ($value1, $value2, $bytes) {

        if (function_exists('gmp_mul')) {

            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_mul($a, $b));

        } else if (function_exists('bcmul')) {

            return bcmul($value1, $value2);

        } else {

            throw new BinaryToolsException('Cannot multiply values.');

        }

    }

    public final static function add ($value1, $value2, $bytes) {
        
        if (function_exists('gmp_add')) {

            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_add($a, $b));

        } else if (function_exists('bcadd')) {

            return bcadd($value1, $value2);

        } else {

            throw new BinaryToolsException('Cannot add values.');

        }

    }

    public final static function sub ($value1, $value2, $bytes) {

        if (function_exists('gmp_sub')) {

            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_sub($a, $b));

        } else if (function_exists('bcsub')) {

            return bcsub($value1, $value2);

        } else {

            throw new BinaryToolsException('Cannot sub values.');

        }

    }

    public final static function div ($value1, $value2, $bytes) {

        if (function_exists('gmp_div')) {

            $a = gmp_init($value1);
            $b = gmp_init($value2);

            return gmp_strval(gmp_div($a, $b));

        } else if (function_exists('bcdiv')) {

            return bcdiv($value1, $value2);

        } else {

            throw new BinaryToolsException('Cannot div values.');

        }

    }

    public final static function shiftLeft ($value1, $value2, $bytes) {

        $bits = base_convert($value1, 10, 2);

        $bits = sprintf('%0' . ($bytes * 8) . 's', $bits . str_repeat('0', $value2));

        return base_convert($bits, 2, 10);

    }

    public final static function unsignedShiftRight ($value1, $value2, $bytes) {

        $bits = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $bits = sprintf('%0' . ($bytes * 8) . 's', substr($bits, 0, strlen($bits) - $value1));

        if ($bits === '') {

            $bits = '0';

        }

        return base_convert($bits, 2, 10);

    }

    public final static function shiftRight ($value1, $value2, $bytes) {

        return self::toSigned(self::unsignedShiftRight($value1, $value2, $bytes), $bytes);

    }

    public final static function orBits ($value1, $value2, $bytes) {

        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {

            if ($value1[$i] === '1' || $value2[$i] == '1') {

                $build .= '1';

            } else {

                $build .= '0';

            }

        }

        return base_convert($build, 2, 10);

    }

    public final static function xorBits ($value1, $value2, $bytes) {

        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {

            if (($value1[$i] === '1' && $value2[$i] === '0') ||
                ($value1[$i] === '0' && $value2[$i] === '1')) {

                $build .= '1';

            } else {

                $build .= '0';

            }

        }

        return base_convert($build, 2, 10);

    }

    public final static function andBits ($value1, $value2, $bytes) {

        $value1 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value1, 10, 2));
        $value2 = sprintf('%0' . ($bytes * 8) . 's', base_convert($value2, 10, 2));

        $build = '';
        for ($i = 0; $i < $bytes * 8; $i++) {

            if ($value1[$i] === '1' && $value2[$i] === '1') {

                $build .= '1';

            } else {

                $build .= '0';

            }

        }

        return base_convert($build, 2, 10);

    }
    
    public final static function convertDoubleToIEEE754 ($doubleValue, $rounded = 8) {

        $doubleValue = sprintf('%063s', base_convert($doubleValue, 10, 2));
        
        $sign = $doubleValue[0];
        $exponent = substr($doubleValue, 1, 10);
        $fraction = substr($doubleValue, 11);
       
        // double scale
        $scale = 52;
        
        $fractionData = 0;
        for ($i = 0; $i < 52; $i++) {
            $fractionData = bcadd($fractionData, bcmul($fraction[$i], bcpow(2, -1 * ($i + 1), $scale), $scale), $scale);
        }
        
        // calc sign
        $operand1 = -1 * $sign;
        
        // calc fraction 
        $operand2 = bcadd(1, $fractionData, $scale);
        
        // calc exponent and bias(?)
        $operand3 = bcpow(2, bindec($exponent), $scale);
        
        return bcmul(-2, bcmul(bcmul($operand1, $operand2, $scale), $operand3, $scale), $rounded);
        
    }

}
