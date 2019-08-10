interface LambdaSyntaxTestInterface
{
    public void doSomething(String param);
}

class LambdaSyntaxTest
{
    public static void testParameterWithLambdaSyntax()
    {
        childTestParameterWithLambdaSyntax((param) -> {
            System.out.println(param);
        });
    }

    private static void childTestParameterWithLambdaSyntax(LambdaSyntaxTestInterface lsti)
    {
        lsti.doSomething("Hello World!");
    }
}
