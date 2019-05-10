<?php
namespace PHPJava\Kernel\Maps;

class ConstantPoolTag extends Map
{
    const CONSTANT_Class = 0x0007;
    const CONSTANT_Fieldref = 0x0009;
    const CONSTANT_Methodref = 0x000A;
    const CONSTANT_InterfaceMethodref = 0x000B;
    const CONSTANT_String = 0x0008;
    const CONSTANT_Integer = 0x0003;
    const CONSTANT_Float = 0x0004;
    const CONSTANT_Long = 0x0005;
    const CONSTANT_Double = 0x0006;
    const CONSTANT_NameAndType = 0x000C;
    const CONSTANT_Utf8 = 0x0001;

    const CONSTANT_MethodHandle = 0x000F;
    const CONSTANT_MethodType = 0x0010;
    const CONSTANT_InvokeDynamic = 0x0012;
    const CONSTANT_Module = 0x0013;
    const CONSTANT_Package = 0x0014;
}
