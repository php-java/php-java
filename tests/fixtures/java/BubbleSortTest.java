class BubbleSortTest
{
    public static void asc()
    {
        int[] array = {-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50};
        for (int i = 0; i < array.length; i++) {
            for (int j = 0; j < array.length; j++) {
                if (array[i] < array[j]) {
                    int tmp = array[i];
                    array[i] = array[j];
                    array[j] = tmp;
                }
            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }


    public static void desc()
    {
        int[] array = {-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50};
        for (int i = 0; i < array.length; i++) {
            for (int j = 0; j < array.length; j++) {
                if (array[i] > array[j]) {
                    int tmp = array[i];
                    array[i] = array[j];
                    array[j] = tmp;
                }
            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }
}