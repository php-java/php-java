class IntegerCalculateTest
{
    private static int returnInt(int n)
    {
        return n;
    }

    public static int intAdd(int value1, int value2)
    {
        return value1 + value2;
    }

    public static int intSub(int value1, int value2)
    {
        return value1 - value2;
    }

    public static int intMul(int value1, int value2)
    {
        return value1 * value2;
    }

    public static int intAddFromOtherMethod(int value1, int value2)
    {
        return returnInt(value1) + returnInt(value2);
    }

    public static int intSubFromOtherMethod(int value1, int value2)
    {
        return returnInt(value1) - returnInt(value2);
    }

    public static int intMulFromOtherMethod(int value1, int value2)
    {
        return returnInt(value1) * returnInt(value2);
    }

}
