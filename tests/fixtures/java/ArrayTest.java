class ArrayTest
{
    public static int[] createIntArray()
    {
        return new int[] { 1, 2, 3 };
    }

    public static String[] createStringArray()
    {
        return new String[] { "foo", "bar", "baz" };
    }

    public static long[] createLongArray()
    {
        return new long[] { 1, 2, 3 };
    }

    public static float[] createFloatArray()
    {
        return new float[] { 1.5F, 2.5F, 3.5F };
    }

    public static double[] createDoubleArray()
    {
        return new double[] { 1.5, 2.5, 3.5 };
    }

    public static boolean[] createBooleanArray()
    {
        return new boolean[] { true, false, true };
    }

    public static char[] createCharArray()
    {
        return new char[] { 'A', 'B', 'C' };
    }

    public static byte[] createByteArray()
    {
        return new byte[] { 0x01, 0x02, 0x03 };
    }

    public static String multiDimensionArrayWithConstants()
    {
        String[][] a = {
            {"Hello", " ", "World!"}
        };

        return a[0][0] + "" + a[0][1] + "" + a[0][2];
    }

    public static String[] testMultiDimensionArrayWithDynamic()
    {
        String[][] a = new String[1][3];
        a[0][0] = "Hello";
        a[0][1] = " ";
        a[0][2] = "World!";

        return a[0];
    }
}
