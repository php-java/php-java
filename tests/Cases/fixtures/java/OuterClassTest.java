class OuterClassTest
{
    public static void main(String[] args)
    {
        System.out.print(OuterClassTestOuterClass.staticHelloWorld());
        System.out.print(" AND ");
        System.out.print((new OuterClassTestOuterClass()).dynamicHelloWorld());
    }
}
