class BoundaryValueTypeForCharTest
{
    // boundary value tests for Char
    public static char s_c0 = '\u0000';
    public static char s_c1 = '\uFFFF';
    public static char s_c2 = '\u7FFF';
    public static char s_c3 = '\u8000';
    public static char s_c4 = '\u9123';
    public char d_c0 = '\u0000';
    public char d_c1 = '\uFFFF';
    public char d_c2 = '\u7FFF';
    public char d_c3 = '\u8000';
    public char d_c4 = '\u9123';
    public static char[] s_a_c = {
        '\u0000',
        '\uFFFF',
        '\u7FFF',
        '\u8000',
        '\u9123',
    };
    public char[] d_a_c = {
        '\u0000',
        '\uFFFF',
        '\u7FFF',
        '\u8000',
        '\u9123',
    };
    public static char[][] s_ma_c = {
        {
            '\u0000',
            '\uFFFF',
            '\u7FFF',
        },
        {
            '\u8000',
            '\u9123',
        },
    };
    public char[][] d_ma_c = {
        {
            '\u0000',
            '\uFFFF',
            '\u7FFF',
        },
        {
            '\u8000',
            '\u9123',
        },
    };
}
