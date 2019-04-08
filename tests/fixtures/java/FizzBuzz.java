class FizzBuzz
{
    public static void main(String[] args)
    {
        for (int i = 0; i < Integer.parseInt(args[0]); i++) {
            StringBuilder text = new StringBuilder();
            if ((i % 3) == 0) {
                text.append("Fizz");
            }
            if ((i % 5) == 0) {
                text.append("Buzz");
            }
            if (text.toString().isEmpty()) {
                text.append(i);
            }
            System.out.println(text);
        }
    }
}