class FloatCalculationTest
{
    private static float returnFloat(float n)
    {
        return n;
    }

    public static float floatAdd(float value1, float value2)
    {
        return value1 + value2;
    }

    public static float floatSub(float value1, float value2)
    {
        return value1 - value2;
    }

    public static float floatMul(float value1, float value2)
    {
        return value1 * value2;
    }

    public static float floatAddFromOtherMethod(float value1, float value2)
    {
        return returnFloat(value1) + returnFloat(value2);
    }

    public static float floatSubFromOtherMethod(float value1, float value2)
    {
        return returnFloat(value1) - returnFloat(value2);
    }

    public static float floatMulFromOtherMethod(float value1, float value2)
    {
        return returnFloat(value1) * returnFloat(value2);
    }

}
