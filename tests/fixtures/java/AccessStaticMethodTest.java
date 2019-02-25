class AccessStaticMethodTest
{
    public static void main(String[] args)
    {
        System.out.print(args[0]);
        System.out.print(args[1]);
    }

    public static void main(int[] args)
    {
        System.out.print(args[0] * 2);
        System.out.print(args[1] * 2);
    }

    public static String returnTest()
    {
        return "Return Test.";
    }
}
