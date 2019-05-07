class ConstructorNoParameterTest
{
    public ConstructorNoParameterTest()
    {
        System.out.println("Hello World!");
    }

    public void entrypoint()
    {
        System.out.println("Entrypoint");
    }

    public static void main(String[] args)
    {
        new ConstructorNoParameterTest();
    }
}