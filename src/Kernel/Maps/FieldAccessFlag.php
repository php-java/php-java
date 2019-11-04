<?php
namespace PHPJava\Kernel\Maps;

class FieldAccessFlag extends Map
{
    const ACC_PUBLIC = 0x0001;
    const ACC_PRIVATE = 0x0002;
    const ACC_PROTECTED = 0x0004;
    const ACC_STATIC = 0x0008;
    const ACC_FINAL = 0x0010;
    const ACC_Volatile = 0x0040;
    const ACC_TRANSIENT = 0x0080;
    const ACC_SYNTHETIC = 0x1000;
    const ACC_ENUM = 0x4000;
}
