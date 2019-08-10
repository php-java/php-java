class BoundaryValueTypeForDoubleTest
{
    // boundary value tests for loats
    public static double s_d0 = 0;
    public static double s_d1 = 1234;
    public static double s_d2 = 0.1234;
    public static double s_d3 = 1234.0;
    public static double s_d4 = 1234.1234;
    public static double s_d5 = -1234;
    public static double s_d6 = -0.1234;
    public static double s_d7 = -1234.0;
    public static double s_d8 = -1234.1234;
    public static double s_d9 = 0x7f7fffff;
    public static double s_d10 = -0x7f7fffff;
    public static double s_d11 = 0xff7fffff;
    public static double s_d12 = -0xff7fffff;
    public static double s_d13 = 0xffefffffffffffffL;
    public static double s_d14 = -0xffefffffffffffffL;
    public static double s_d15 = 0x7fefffffffffffffL;
    public static double s_d16 = -0x7fefffffffffffffL;
    public double d_d0 = 0;
    public double d_d1 = 1234;
    public double d_d2 = 0.1234;
    public double d_d3 = 1234.0;
    public double d_d4 = 1234.1234;
    public double d_d5 = -1234;
    public double d_d6 = -0.1234;
    public double d_d7 = -1234.0;
    public double d_d8 = -1234.1234;
    public double d_d9 = 0x7f7fffff;
    public double d_d10 = -0x7f7fffff;
    public double d_d11 = 0xff7fffff;
    public double d_d12 = -0xff7fffff;
    public double d_d13 = 0xffefffffffffffffL;
    public double d_d14 = -0xffefffffffffffffL;
    public double d_d15 = 0x7fefffffffffffffL;
    public double d_d16 = -0x7fefffffffffffffL;
    public static double[] s_a_d = {
        0,
        1234,
        0.1234,
        1234.0,
        1234.1234,
        -1234,
        -0.1234,
        -1234.0,
        -1234.1234,
        0x7f7fffff,
        -0x7f7fffff,
        0xff7fffff,
        -0xff7fffff,
        0xffefffffffffffffL,
        -0xffefffffffffffffL,
        0x7fefffffffffffffL,
        -0x7fefffffffffffffL,
    };
    public double[] d_a_d = {
        0,
        1234,
        0.1234,
        1234.0,
        1234.1234,
        -1234,
        -0.1234,
        -1234.0,
        -1234.1234,
        0x7f7fffff,
        -0x7f7fffff,
        0xff7fffff,
        -0xff7fffff,
        0xffefffffffffffffL,
        -0xffefffffffffffffL,
        0x7fefffffffffffffL,
        -0x7fefffffffffffffL,
    };
    public static double[][] s_ma_d = {
        {
            0,
            1234,
            0.1234,
            1234.0,
            1234.1234,
            -1234,
            0xffefffffffffffffL,
            -0xffefffffffffffffL,
        },
        {
            -0.1234,
            -1234.0,
            -1234.1234,
            0x7f7fffff,
            -0x7f7fffff,
            0xff7fffff,
            -0xff7fffff,
            0x7fefffffffffffffL,
            -0x7fefffffffffffffL,
        },
    };
    public double[][] d_ma_d = {
        {
            0,
            1234,
            0.1234,
            1234.0,
            1234.1234,
            -1234,
            0xffefffffffffffffL,
            -0xffefffffffffffffL,
        },
        {
            -0.1234,
            -1234.0,
            -1234.1234,
            0x7f7fffff,
            -0x7f7fffff,
            0xff7fffff,
            -0xff7fffff,
            0x7fefffffffffffffL,
            -0x7fefffffffffffffL,
        },
    };

    // NaN values
    public static double s_nd0 = 0x7f800001;
    public static double s_nd1 = 0x7f8ffff1;
    public static double s_nd2 = 0xff800001;
    public static double s_nd3 = 0xff8ffff1;
    public static double s_nd4 = 0xffffffff;
    public static double s_nd5 = 0x7ff0000000000001L;
    public static double s_nd6 = 0x7ffffffffffffff1L;
    public static double s_nd7 = 0x7fffffffffffffffL;
    public static double s_nd8 = 0xfff0000000000001L;
    public static double s_nd9 = 0xfffffffffffffff1L;
    public static double s_nd10 = 0xffffffffffffffffL;

    public double d_nd0 = 0x7f800001;
    public double d_nd1 = 0x7f8ffff1;
    public double d_nd2 = 0xff800001;
    public double d_nd3 = 0xff8ffff1;
    public double d_nd4 = 0xffffffff;
    public double d_nd5 = 0x7ff0000000000001L;
    public double d_nd6 = 0x7ffffffffffffff1L;
    public double d_nd7 = 0x7fffffffffffffffL;
    public double d_nd8 = 0xfff0000000000001L;
    public double d_nd9 = 0xfffffffffffffff1L;
    public double d_nd10 = 0xffffffffffffffffL;

    public static double[] s_a_nd = {
        0x7f800001,
        0x7f8ffff1,
        0xff800001,
        0xff8ffff1,
        0xffffffff,
        0x7ff0000000000001L,
        0x7ffffffffffffff1L,
        0x7fffffffffffffffL,
        0xfff0000000000001L,
        0xfffffffffffffff1L,
        0xffffffffffffffffL,
    };
    public double[] d_a_nd = {
        0x7f800001,
        0x7f8ffff1,
        0xff800001,
        0xff8ffff1,
        0xffffffff,
        0x7ff0000000000001L,
        0x7ffffffffffffff1L,
        0x7fffffffffffffffL,
        0xfff0000000000001L,
        0xfffffffffffffff1L,
        0xffffffffffffffffL,
    };
    public static double[][] s_ma_nd = {
        {
            0x7f800001,
            0x7f8ffff1,
            0xff800001,
            0x7ff0000000000001L,
            0x7ffffffffffffff1L,
            0x7fffffffffffffffL,
        },
        {
            0xff8ffff1,
            0xffffffff,
            0xfff0000000000001L,
            0xfffffffffffffff1L,
            0xffffffffffffffffL,
        },
    };
    public double[][] d_ma_nd = {
        {
            0x7f800001,
            0x7f8ffff1,
            0xff800001,
            0x7ff0000000000001L,
            0x7ffffffffffffff1L,
            0x7fffffffffffffffL,
        },
        {
            0xff8ffff1,
            0xffffffff,
            0xfff0000000000001L,
            0xfffffffffffffff1L,
            0xffffffffffffffffL,
        },
    };


    // Indinity values (Positive)
    public static double s_ipd0 = 0x7f800000;
    public static double s_ipd1 = 0x7ff0000000000000L;
    public double d_ipd0 = 0x7f800000;
    public double d_ipd1 = 0x7ff0000000000000L;
    public static double[] s_a_ipd = {
        0x7f800000,
        0x7f800000,
        0x7ff0000000000000L,
        0x7ff0000000000000L,
    };
    public double[] d_a_ipd = {
        0x7f800000,
        0x7f800000,
        0x7ff0000000000000L,
        0x7ff0000000000000L,
    };
    public static double[][] s_ma_ipd = {
        {
            0x7f800000,
            0x7ff0000000000000L,
        },
        {
            0x7f800000,
            0x7ff0000000000000L,
        },
    };
    public double[][] d_ma_ipd = {
        {
            0x7f800000,
            0x7ff0000000000000L,
        },
        {
            0x7f800000,
            0x7ff0000000000000L,
        },
    };

    // Infinity values (Negative)
    public static double s_ind0 = 0xff800000;
    public static double s_ind1 = 0xfff0000000000000L;
    public double d_ind0 = 0xff800000;
    public double d_ind1 = 0xfff0000000000000L;
    public static double[] s_a_ind = {
        0x7f800000,
        0xff800000,
        0xfff0000000000000L,
    };
    public double[] d_a_ind = {
        0x7f800000,
        0xff800000,
        0xfff0000000000000L,
    };
    public static double[][] s_ma_ind = {
        {
            0x7f800000,
            0xff800000,
            0xfff0000000000000L,
        },
        {
            0x7f800000,
            0xff800000,
            0xfff0000000000000L,
        }
    };
    public double[][] d_ma_ind = {
        {
            0x7f800000,
            0xff800000,
            0xfff0000000000000L,
        },
        {
            0x7f800000,
            0xff800000,
            0xfff0000000000000L,
        }
    };
}
