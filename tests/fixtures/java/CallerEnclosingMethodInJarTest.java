class CallerEnclosingMethodInJarTest
{
    public static void main(String[] args)
    {
        new CalleeEnclosingMethodInJarTest() {{
            this.text = "Hello World!";
            callHelloWorld();
        }};
    }
}
