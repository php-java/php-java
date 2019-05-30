class BoundaryValueTypeForFloatTest
{
    // boundary value tests for Floats
    public static float s_f0 = 0;
    public static float s_f1 = 1234F;
    public static float s_f2 = 0.1234F;
    public static float s_f3 = 1234.0F;
    public static float s_f4 = 1234.1234F;
    public static float s_f5 = -1234F;
    public static float s_f6 = -0.1234F;
    public static float s_f7 = -1234.0F;
    public static float s_f8 = -1234.1234F;
    public static float s_f9 = 0x7f7fffff;
    public static float s_f10 = -0x7f7fffff;
    public static float s_f11 = 0xff7fffff;
    public static float s_f12 = -0xff7fffff;
    public float d_f0 = 0;
    public float d_f1 = 1234F;
    public float d_f2 = 0.1234F;
    public float d_f3 = 1234.0F;
    public float d_f4 = 1234.1234F;
    public float d_f5 = -1234F;
    public float d_f6 = -0.1234F;
    public float d_f7 = -1234.0F;
    public float d_f8 = -1234.1234F;
    public float d_f9 = 0x7f7fffff;
    public float d_f10 = -0x7f7fffff;
    public float d_f11 = 0xff7fffff;
    public float d_f12 = -0xff7fffff;
    public static float[] s_a_f = {
        0,
        1234F,
        0.1234F,
        1234.0F,
        1234.1234F,
        -1234F,
        -0.1234F,
        -1234.0F,
        -1234.1234F,
        0x7f7fffff,
        -0x7f7fffff,
        0xff7fffff,
        -0xff7fffff,
    };
    public float[] d_a_f = {
        0,
        1234F,
        0.1234F,
        1234.0F,
        1234.1234F,
        -1234F,
        -0.1234F,
        -1234.0F,
        -1234.1234F,
        0x7f7fffff,
        -0x7f7fffff,
        0xff7fffff,
        -0xff7fffff,
    };
    public static float[][] s_ma_f = {
        {
            0,
            1234F,
            0.1234F,
            1234.0F,
            1234.1234F,
            -1234F,
        },
        {
            -0.1234F,
            -1234.0F,
            -1234.1234F,
            0x7f7fffff,
            -0x7f7fffff,
            0xff7fffff,
            -0xff7fffff,
        },
    };
    public float[][] d_ma_f = {
        {
            0,
            1234F,
            0.1234F,
            1234.0F,
            1234.1234F,
            -1234F,
        },
        {
            -0.1234F,
            -1234.0F,
            -1234.1234F,
            0x7f7fffff,
            -0x7f7fffff,
            0xff7fffff,
            -0xff7fffff,
        },
    };

    // NaN values
    public static float s_nf0 = 0x7f800001;
    public static float s_nf1 = 0x7f8ffff1;
    public static float s_nf2 = 0xff800001;
    public static float s_nf3 = 0xff8ffff1;
    public static float s_nf4 = 0xffffffff;
    public float d_nf0 = 0x7f800001;
    public float d_nf1 = 0x7f8ffff1;
    public float d_nf2 = 0xff800001;
    public float d_nf3 = 0xff8ffff1;
    public float d_nf4 = 0xffffffff;
    public static float[] s_a_nf = {
        0x7f800001,
        0x7f8ffff1,
        0xff800001,
        0xff8ffff1,
        0xffffffff,
    };
    public float[] d_a_nf = {
        0x7f800001,
        0x7f8ffff1,
        0xff800001,
        0xff8ffff1,
        0xffffffff,
    };
    public static float[][] s_ma_nf = {
        {
            0x7f800001,
            0x7f8ffff1,
            0xff800001,
        },
        {
            0xff8ffff1,
            0xffffffff,
        },
    };
    public float[][] d_ma_nf = {
        {
            0x7f800001,
            0x7f8ffff1,
            0xff800001,
        },
        {
            0xff8ffff1,
            0xffffffff,
        },
    };


    // Infinity values (Positive)
    public static float s_ipf0 = 0x7f800000;
    public float d_ipf0 = 0x7f800000;
    public static float[] s_a_ipf = {
        0x7f800000,
        0x7f800000,
    };
    public float[] d_a_ipf = {
        0x7f800000,
        0x7f800000,
    };
    public static float[][] s_ma_ipf = {
        {
            0x7f800000,
        },
        {
            0x7f800000,
        },
    };
    public float[][] d_ma_ipf = {
        {
            0x7f800000,
        },
        {
            0x7f800000,
        },
    };

    // Infinity values (Negative)
    public static float s_inf0 = 0xff800000;
    public float d_inf0 = 0xff800000;
    public static float[] s_a_inf = {
        0x7f800000,
        0xff800000,
    };
    public float[] d_a_inf = {
        0x7f800000,
        0xff800000,
    };
    public static float[][] s_ma_inf = {
        {
            0x7f800000,
            0xff800000,
        },
        {
            0x7f800000,
            0xff800000,
        },
    };
    public float[][] d_ma_inf = {
        {
            0x7f800000,
            0xff800000,
        },
        {
            0x7f800000,
            0xff800000,
        },
    };
}
