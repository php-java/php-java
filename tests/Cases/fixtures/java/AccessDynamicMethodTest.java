class AccessDynamicMethodTest
{
    public void main(String[] args)
    {
        System.out.print(args[0]);
        System.out.print(args[1]);
    }

    public void main(int[] args)
    {
        System.out.print(args[0] * 2);
        System.out.print(args[1] * 2);
    }

    public String returnTest()
    {
        return "Return Test.";
    }
}
