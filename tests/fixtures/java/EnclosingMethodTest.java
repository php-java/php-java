class EnclosingMethodTest
{
    public String text;

    public static void main(String[] args)
    {
        new EnclosingMethodTest() {{
            this.text = "Hello World!";
            callHelloWorld();
        }};
    }

    public void callHelloWorld()
    {
        System.out.println(this.text);
    }
}
