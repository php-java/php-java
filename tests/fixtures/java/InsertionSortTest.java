class InsertionSortTest
{
    public static void asc()
    {
        int[] array = {-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50};
        for(int i = 1; i < array.length; i++){
            int j = i;
            while(j >= 1 && array[j-1] > array[j]){
                int tmp = array[j];
                array[j] = array[j - 1];
                array[j - 1] = tmp;
                j--;

            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }


    public static void desc()
    {
        int[] array = {-14, 5, 111, 44, 2, 9999, 99, 123, 1, -10, 33, -50};
        for(int i = 1; i < array.length; i++){
            int j = i;
            while(j >= 1 && array[j - 1] < array[j]){
                int tmp = array[j];
                array[j] = array[j - 1];
                array[j - 1] = tmp;
                j--;

            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }

    public static void ascByParam(int[] array)
    {
        for(int i = 1; i < array.length; i++){
            int j = i;
            while(j >= 1 && array[j - 1] > array[j]){
                int tmp = array[j];
                array[j] = array[j - 1];
                array[j - 1] = tmp;
                j--;

            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }


    public static void descByParam(int[] array)
    {
        for(int i = 1; i < array.length; i++){
            int j = i;
            while(j >= 1 && array[j - 1] < array[j]){
                int tmp = array[j];
                array[j] = array[j - 1];
                array[j - 1] = tmp;
                j--;

            }
        }

        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }
}