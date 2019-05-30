class BoundaryValueTypeForShortTest
{
    // boundary value tests for Shorts
    public static short s_s0 = 1234;
    public static short s_s1 = 32767;
    public static short s_s2 = -1;
    public static short s_s3 = -1234;
    public static short s_s4 = -32768;
    public static short s_s5 = 0;
    public short d_s0 = 1234;
    public short d_s1 = 32767;
    public short d_s2 = -1;
    public short d_s3 = -1234;
    public short d_s4 = -32768;
    public short d_s5 = 0;
    public static short[] s_a_s = {
        1234,
        32767,
        -1,
        -1234,
        -32768,
        0,
    };
    public short[] d_a_s = {
            1234,
            32767,
            -1,
            -1234,
            -32768,
            0,
    };
    public static short[][] s_ma_s = {
        {
            1234,
            32767,
            -1,
        },
        {
            -1234,
            -32768,
            0,
        },
    };
    public short[][] d_ma_s = {
        {
            1234,
            32767,
            -1,
        },
        {
            -1234,
            -32768,
            0,
        },
    };
}
