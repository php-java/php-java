class InstanceOfTest
{
    public static void instanceOfString()
    {
        String a = "Hello World";
        if (a instanceof String) {
            System.out.println(a);
            return;
        }
        System.out.println("Unreachable here.");
    }

    public static void instanceOfObject()
    {
        String a = "Hello World";
        if (a instanceof Object) {
            System.out.println(a);
            return;
        }
        System.out.println("Unreachable here.");
    }
}
