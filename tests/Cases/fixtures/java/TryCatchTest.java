class TryCatchTest
{
    public static int testPassthroughTryStatement()
    {
        try {
            // nothing to do
        } catch (NullPointerException e) {
            return -1;
        }
        return 1;
    }


    public static int testPassthroughCatchStatement()
    {
        try {
            throw new NullPointerException();
        } catch (NullPointerException e) {
            return -1;
        }
    }

    public static int testImitationThrowException()
    {
        String test = "Test value";

        try {
            // Get an error
            test.charAt(-1);
        } catch (IndexOutOfBoundsException e) {
            return -1;
        }

        return 1;
    }

    public static void testImitationThrownExceptionHasPreviousException()
    {
        "".charAt(-1);
    }
}
