class DoubleCalculationTest
{
    private static double returnDouble(double n)
    {
        return n;
    }

    public static double doubleAdd(double value1, double value2)
    {
        return value1 + value2;
    }

    public static double doubleSub(double value1, double value2)
    {
        return value1 - value2;
    }

    public static double doubleMul(double value1, double value2)
    {
        return value1 * value2;
    }

    public static double doubleAddFromOtherMethod(double value1, double value2)
    {
        return returnDouble(value1) + returnDouble(value2);
    }

    public static double doubleSubFromOtherMethod(double value1, double value2)
    {
        return returnDouble(value1) - returnDouble(value2);
    }

    public static double doubleMulFromOtherMethod(double value1, double value2)
    {
        return returnDouble(value1) * returnDouble(value2);
    }

}
