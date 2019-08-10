class BoundaryValueTypeForByteTest
{
    // boundary value tests for Byte
    public static byte s_by0 = 0x00;
    public static byte s_by1 = 0x7F;
    public static byte s_by2 = 0x12;
    public static byte s_by3 = -0x01;
    public static byte s_by4 = -0x7F;
    public static byte s_by5 = -0x12;
    public static byte s_by6 = -0x80;
    public byte d_by0 = 0x00;
    public byte d_by1 = 0x7F;
    public byte d_by2 = 0x12;
    public byte d_by3 = -0x01;
    public byte d_by4 = -0x7F;
    public byte d_by5 = -0x12;
    public byte d_by6 = -0x80;
    public static byte[] s_a_by = {
        0x00,
        0x7F,
        0x12,
        -0x01,
        -0x7F,
        -0x12,
        -0x80,
    };
    public byte[] d_a_by = {
        0x00,
        0x7F,
        0x12,
        -0x01,
        -0x7F,
        -0x12,
        -0x80,
    };
    public static byte[][] s_ma_by = {
        {
            0x00,
            0x7F,
            0x12,
        },
        {
            -0x01,
            -0x7F,
            -0x12,
            -0x80,
        },
    };
    public byte[][] d_ma_by = {
        {
            0x00,
            0x7F,
            0x12,
        },
        {
            -0x01,
            -0x7F,
            -0x12,
            -0x80,
        },
    };
}
