<?php
namespace PHPJava\Kernel\Maps;

class ClassAccessFlag extends Map
{
    const ACC_PUBLIC     = 0x0001;
    const ACC_FINAL      = 0x0010;
    const ACC_SUPER      = 0x0020;
    const ACC_INTERFACE  = 0x0200;
    const ACC_ABSTRACT   = 0x0400;
    const ACC_SYNTHETIC  = 0x1000;
    const ACC_ANNOTATION = 0x2000;
    const ACC_ENUM       = 0x4000;
    const ACC_MODULE     = 0x8000;
}
