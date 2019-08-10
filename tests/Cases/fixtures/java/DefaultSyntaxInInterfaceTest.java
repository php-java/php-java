class DefaultSyntaxInInterfaceTest
{
    public interface DefaultSyntaxInInterfaceTestInterface
    {
        default public void defaultInterfaceMethodTest1()
        {
            System.out.println("Hello World!");
        }
    }

    public static void defaultInterfaceMethodTest1()
    {
        DefaultSyntaxInInterfaceTestInterface instance = new DefaultSyntaxInInterfaceTestInterface() {
            // Does not override.
        };
        instance.defaultInterfaceMethodTest1();
    }
}
