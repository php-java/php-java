class QuickSortTest
{

    public static void asc(int[] array)
    {
        array = ascQuickSort(array, 0, array.length - 1);
        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }

    public static void desc(int[] array)
    {
        array = descQuickSort(array, 0, array.length - 1);
        for (int i = 0; i < array.length; i++) {
            System.out.println(array[i]);
        }
    }

    public static int[] ascQuickSort(int[] array, int left, int right)
    {
        int tmp;
        if (left < right) {
            int i = left;
            int j = right;
            int pivot = array[i + (j - i) / 2];
            while (true) {
                while (array[i] < pivot) {
                    i++;
                }
                while (pivot < array[j]) {
                    j--;
                }
                if (i >= j) {
                    break;
                }
                tmp = array[i];
                array[i] = array[j];
                array[j] = tmp;
                i++;
                j--;
            }
            ascQuickSort(array, left, i - 1);
            ascQuickSort(array, j + 1, right);
        }
        return array;
    }

    public static int[] descQuickSort(int[] array, int left, int right)
    {
        int tmp;
        if (left < right) {
            int i = left;
            int j = right;
            int pivot = array[i + (j - i) / 2];
            while (true) {
                while (array[i] > pivot) {
                    i++;
                }
                while (pivot > array[j]) {
                    j--;
                }
                if (i >= j) {
                    break;
                }
                tmp = array[i];
                array[i] = array[j];
                array[j] = tmp;
                i++;
                j--;
            }
            descQuickSort(array, left, i - 1);
            descQuickSort(array, j + 1, right);
        }
        return array;
    }
}