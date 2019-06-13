interface DefaultInterfaceCallsInterfaceMethodTest
{
    public abstract void callee();

    default void callDefaultMethod(DefaultInterfaceCallsInterfaceMethodTest dicimt)
    {
        dicimt.callee();
    }

    public static void main(String[] args)
    {
        DefaultInterfaceCallsInterfaceMethodTest dicimt = new DefaultInterfaceCallsInterfaceMethodTest() {
            @java.lang.Override
            public void callee()
            {
                System.out.println("Hello World!");
            }
        };

        dicimt.callDefaultMethod(dicimt);
    }
}
