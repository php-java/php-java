class BoundaryValueTypeForLongTest
{
    // boundary value tests for Longs
    public static long s_l0 = 1234L;
    public static long s_l1 = 32767L;
    public static long s_l2 = 32768L;
    public static long s_l3 = 2147483647L;
    public static long s_l4 = -1L;
    public static long s_l5 = -1234L;
    public static long s_l6 = -2147483648L;
    public static long s_l7 = -32768L;
    public static long s_l8 = -9223372036854775808L;
    public static long s_l9 = 9223372036854775807L;
    public static long s_l10 = 0L;
    public long d_l0 = 1234L;
    public long d_l1 = 32767L;
    public long d_l2 = 32768L;
    public long d_l3 = 2147483647L;
    public long d_l4 = -1L;
    public long d_l5 = -1234L;
    public long d_l6 = -2147483648L;
    public long d_l7 = -32768L;
    public long d_l8 = -9223372036854775808L;
    public long d_l9 = 9223372036854775807L;
    public long d_l10 = 0L;
    public static long[] s_a_l = {
        1234L,
        32767L,
        32768L,
        2147483647L,
        -1L,
        -1234L,
        -2147483648L,
        -32768L,
        -9223372036854775808L,
        9223372036854775807L,
        0L,
    };
    public long[] d_a_l = {
        1234L,
        32767L,
        32768L,
        2147483647L,
        -1L,
        -1234L,
        -2147483648L,
        -32768L,
        -9223372036854775808L,
        9223372036854775807L,
        0L,
    };
    public static long[][] s_ma_l = {
        {
            1234L,
            32767L,
            32768L,
            2147483647L,
            -1L,
            -1234L,
        },
        {
            -2147483648L,
            -32768L,
            -9223372036854775808L,
            9223372036854775807L,
            0L,
        },
    };
    public long[][] d_ma_l = {
        {
            1234L,
            32767L,
            32768L,
            2147483647L,
            -1L,
            -1234L,
        },
        {
            -2147483648L,
            -32768L,
            -9223372036854775808L,
            9223372036854775807L,
            0L,
        },
    };
}
