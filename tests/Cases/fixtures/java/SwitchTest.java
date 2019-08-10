class SwitchTest
{
    public static void tableswitch(int jump)
    {
        switch (jump) {
            case -1:
                System.out.print("Cat");
                break;
            case 0:
                System.out.print("Dog");
                break;
            case 1:
                System.out.print("Hamster");
                break;
        }
    }

    public static void lookupswitch(int jump)
    {
        switch (jump) {
            case 1234:
                System.out.print("Lion");
                break;
            case 5678:
                System.out.print("Panda");
                break;
            case 9999:
                System.out.print("Elephant");
                break;
        }
    }
}
