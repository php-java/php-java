import java.util.Objects;

class JavaUtilObjectsTest
{
    public static void testHashCode()
    {
        System.out.println(Objects.hashCode("hello, world"));
        System.out.println(Objects.hashCode("HELLO, WORLD".toLowerCase()));
        System.out.println(Objects.hashCode(new String("hello, world")));
    }
}
