class GetFieldTest
{
    public int value = 1;

    public static int getField() {
	GetFieldTest instance = new GetFieldTest();
	return instance.value;
    }
}
