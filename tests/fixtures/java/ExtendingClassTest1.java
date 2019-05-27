class ExtendingClassTest1 extends SuperExtendingClassTest
{
    public static void main(String[] args)
    {
        ExtendingClassTest1 test = new ExtendingClassTest1();


        // Expected 99999 from SuperExtendingClassTest
        System.out.println(test.value);
    }
}