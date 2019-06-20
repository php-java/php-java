import java.lang.invoke.*;

interface DefaultInterfaceGetCalledByMethodLookupTest
{
    public abstract void test();

    public static void main(String[] args) throws Throwable
    {
        DefaultInterfaceGetCalledByMethodLookupTest digcbmlt = new DefaultInterfaceGetCalledByMethodLookupTest() {
            @java.lang.Override
            public void test() {
                System.out.println("Hello World!");
            }
        };

        MethodHandle mh = MethodHandles.lookup().findVirtual(
                DefaultInterfaceGetCalledByMethodLookupTest.class,
            "test",
            MethodType.methodType(void.class)
        );
        mh.invokeExact(digcbmlt);
    }
}
