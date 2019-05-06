class InvokeDynamicTest
{
    interface InterfaceTest
    {
        public String callee(String name);
    }

    public static void main(String[] args)
    {
        InterfaceTest it = v -> { return "Hello" + v; };
        System.out.println(it.callee(" World!"));
    }
}