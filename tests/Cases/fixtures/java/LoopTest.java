class LoopTest
{
    public static int calculateByFor(int length)
    {
        int sum = 0;
        for (int i = 0; i < length; i++) {
            sum += i;
        }
        return sum;
    }

    public static int calculateByWhile(int length)
    {
        int sum = 0;
        int i = 0;
        while (i < length) {
            sum += i;
            i++;
        }
        return sum;
    }
}
