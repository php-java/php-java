class ObjectCompareTest
{
    public static void compareInitiatedObjects()
    {
        ObjectCompareTest oct1 = new ObjectCompareTest();
        ObjectCompareTest oct2 = new ObjectCompareTest();
        System.out.println(oct1 == oct2 ? "Same" : "NotSame");
    }
}
