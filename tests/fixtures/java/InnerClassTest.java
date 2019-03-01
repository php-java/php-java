class InnerClassTest
{
    public static void main(String[] args)
    {
        (new InnerClassTest()).callInnerClass(args[0], args[1]);
    }

    public void callInnerClass(String a, String b)
    {
        System.out.print((new InnerClassTestInnerClass()).helloWorld(a, b));
    }

    public class InnerClassTestInnerClass
    {
        public String helloWorld(String a, String b)
        {
            return a + " " + b;
        }
    }
}
