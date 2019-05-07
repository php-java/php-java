class JavaLangSystemTest
{
    public static void identityHashCode()
    {
        System.out.println(System.identityHashCode("Hello, World"));
        System.out.println(System.identityHashCode(new String("Hello, World")));
    }
}
