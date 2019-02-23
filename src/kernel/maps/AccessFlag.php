<?php
namespace PHPJava\Kernel\Maps;

class AccessFlag extends Map
{
    const _Public     = 0x0001;
    const _Private    = 0x0002;
    const _Protected  = 0x0004;
    const _Static     = 0x0008;
    const _Final      = 0x0010;
    const _Volatile   = 0x0040;
    const _Transient  = 0x0080;
}
