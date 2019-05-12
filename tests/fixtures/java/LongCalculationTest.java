class LongCalculationTest
{
    private static long returnLong(long n)
    {
        return n;
    }

    public static long longAdd(long value1, long value2)
    {
        return value1 + value2;
    }

    public static long longSub(long value1, long value2)
    {
        return value1 - value2;
    }

    public static long longMul(long value1, long value2)
    {
        return value1 * value2;
    }

    public static long longAddFromOtherMethod(long value1, long value2)
    {
        return returnLong(value1) + returnLong(value2);
    }

    public static long longSubFromOtherMethod(long value1, long value2)
    {
        return returnLong(value1) - returnLong(value2);
    }

    public static long longMulFromOtherMethod(long value1, long value2)
    {
        return returnLong(value1) * returnLong(value2);
    }

}
