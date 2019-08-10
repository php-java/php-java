class ExtendingClassTest2 extends SuperExtendingClassTest
{
    protected int value = 12345;

    public static void main(String[] args)
    {
        ExtendingClassTest2 test = new ExtendingClassTest2();

        // Expected 12345
        System.out.println(test.value);
    }
}