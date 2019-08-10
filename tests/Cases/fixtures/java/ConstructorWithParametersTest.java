class ConstructorWithParametersTest
{
    public ConstructorWithParametersTest(String p)
    {
        System.out.println(p);
    }

    public void entrypoint()
    {
        System.out.println("Entrypoint");
    }

    public static void main(String[] args)
    {
        new ConstructorWithParametersTest("Hello World!");
    }
}