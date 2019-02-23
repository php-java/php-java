<?php
namespace PHPJava\Kernel\Maps;

class ClassAccessFlagEnum extends Map
{
    const _Public     = 0x0001;
    const _Final      = 0x0010;
    const _Super      = 0x0020;
    const _Interface  = 0x0200;
    const _Abstract   = 0x0400;
    const _Synthetic  = 0x1000;
    const _Annotation = 0x2000;
    const _Enum       = 0x4000;
}