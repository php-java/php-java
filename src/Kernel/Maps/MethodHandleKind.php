<?php
namespace PHPJava\Kernel\Maps;

class MethodHandleKind extends Map
{
    const REF_getField         = 0x0001;
    const REF_getStatic        = 0x0002;
    const REF_putField         = 0x0003;
    const REF_putStatic        = 0x0004;
    const REF_invokeVirtual    = 0x0005;
    const REF_invokeStatic     = 0x0006;
    const REF_invokeSpecial    = 0x0007;
    const REF_newInvokeSpecial = 0x0008;
    const REF_invokeInterface  = 0x0009;
}
