class BranchIfTest
{
    public static int ifAcmpEq(String value1, String value2)
    {
	return value1 != value2 ? 0 : 1;
    }

    public static int ifAcmpNe(String value1, String value2)
    {
	return value1 == value2 ? 0 : 1;
    }

    public static int ifIcmpEq(int value1, int value2)
    {
	return value1 != value2 ? 0 : 1;
    }

    public static int ifIcmpNe(int value1, int value2)
    {
	return value1 == value2 ? 0 : 1;
    }

    public static int ifIcmpLt(int value1, int value2)
    {
	return value1 >= value2 ? 0 : 1;
    }

    public static int ifIcmpGe(int value1, int value2)
    {
	return value1 < value2 ? 0 : 1;
    }

    public static int ifIcmpGt(int value1, int value2)
    {
	return value1 <= value2 ? 0 : 1;
    }

    public static int ifIcmpLe(int value1, int value2)
    {
	return value1 > value2 ? 0 : 1;
    }

    public static int ifLcmpGraterThan(long value1, long value2)
    {
        return value1 > value2 ? 0 : 1;
    }

    public static int ifLcmpLessThan(long value1, long value2)
    {
        return value1 < value2 ? 0 : 1;
    }

    public static int ifLcmpEqualsTo(long value1, long value2)
    {
        return value1 == value2 ? 0 : 1;
    }
}
