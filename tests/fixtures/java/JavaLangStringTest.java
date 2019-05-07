class JavaLangStringTest
{
    public static void charAtIndex(String a, int b)
    {
        System.out.print(a.charAt(b));
    }

    public static void concat(String a, String b)
    {
        System.out.print(a.concat(b));
    }

    public static void testHashCode()
    {
        System.out.println(Objects.hashCode("hello, world"));
        System.out.println(Objects.hashCode("HELLO, WORLD".toLowerCase()));
        System.out.println(Objects.hashCode(new String("hello, world")));
    }

    public static void replace(String a, String b, String c)
    {
        System.out.print(a.replace(b, c));
    }

    public static void toLowerCase(String a)
    {
        System.out.print(a.toLowerCase());
    }

    public static void toUpperCase(String a)
    {
        System.out.print(a.toUpperCase());
    }
}