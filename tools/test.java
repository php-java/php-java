class TestEmulates {

}

class Test {

    long z = -22222222222222222L;
    static int c = 100;
    static String b = "Hello World";
    
    /**
     * test for "Integer" value
     * 
     * @param value 
     * @return 
     */
    public int testInt (int value) {
                
        System.out.println(this.testPrivateInteger(value));
        return value;
    }
    
    /**
     * test for "Short" value
     * 
     * @param value 
     * @return 
     */
    public short testShort (short value) {
        return value;
    }
    
    /**
     * test for "Long" value
     * 
     * @param value 
     * @return 
     */
    public long testLong (long value) {
        return value;
    }
    
    /**
     * test for "Float" value
     * 
     * @param value 
     * @return 
     */
    public float testLong (float value) {
        return value;
    }
    
    /**
     * test for "Double" value
     * 
     * @param value 
     * @return 
     */
    public double testLong (double value) {
        return value;
    }
    
    /**
     * test for "Char" value
     * 
     * @param value 
     * @return 
     */
    public char testChar (char value) {
        return value;
    }
    
    /**
     * test for "Byte" value
     * 
     * @param value 
     * @return 
     */
    public byte testByte (byte value) {
        return value;
    }
    
    /**
     * test for "Boolean" value
     * 
     * @param value 
     * @return 
     */
    public boolean testBoolean (boolean value) {
        return value;
    }
    
    /**
     * test for "String" value
     * 
     * @param value 
     * @return 
     */
    public String testString (String value) {
        return value;
    }

    /**
     * main method
     * 
     * @param args 
     */
    public static void main (String[] args) {

        String x = "String";

        // new instance
        Test _a = new Test();

        // test call
        // _a.javaTest();


        int t = 2;
        //t *= 1;
        //t = ~1;
        t <<= 1;
        System.out.println(t);
        t >>= 1;
        System.out.println(t);
        t -= 1;
        System.out.println(t);
        t += 1;
        System.out.println(t);
        t = 1;
        System.out.println(t);
        t >>>= 1;
        System.out.println(t);
        t |= 1;
        System.out.println(t);
        t &= 1;
        System.out.println(t);
        t = 345321;
        System.out.println((short) t);

        long t1 = 111;
        t1 *= 1;
        t1 = ~1;
        t1 <<= 1;
        t1 >>= 1;
        t1 -= 1;
        t1 += 1;
        t1 = 1;
        t1 >>>= 1;
        t1 |= 1;
        t1 &= 1;

        double t2 = 2;
        t2 *= 1;
        t2 = ~1;
        t2 -= 1;
        t2 += 1;
        t2 = 1;

        /*boolean _b = false;
        _b = true && true;
        _b = true && false;
        _b = true || true;
        _b = true || false;*/

        try {

            for (int i = 0; i < Test.c; i++) {

                StringBuilder b = new StringBuilder();

                switch (i + 1) {

                    case -1:

                        b.append("a");

                    break;
                    case 1:

                        b.append("b");

                    break;
                    case 2:

                        b.append("c");

                    break;

                }

                if (!x.equals(i + "")) {


                    System.out.println("Test:" + Test.b + "/" + x + "*****" + i + "/" + b);

                }

                if (i == 10) {

                    throw new NullPointerException();

                }

            }

        } catch (NullPointerException e) {

            System.out.println("ぬるぷっぷー");

        }
        
        String[] test = {"4", "5", "6"};
        for (String i : test) {
            
            System.out.println(i);

        }
        
        int[] test2 = {1, 2, 3};
        for (int i : test2) {
            
            System.out.println(i);

        }
        
        long[] test3 = {1L, 2L, 3L};
        for (long i : test3) {
            
            System.out.println(i);

        }
        
        double[] test4 = {3.4, 3.5, 3.6, 81263.12312321, -99};
        for (double i : test4) {
            
            System.out.println(i);

        }

    }

    public static String test (int n, String m, int l, int i, int v, int k) {

        int j = 1;

        for (; j <= 10; j++) {

            j++;

        }

        return "Java emulate by php " + n + "/" + m + "/" + l + "/" + i + "/" + v + "/" + k + "/" + j;

    }

    private int testPrivateInteger (int value) {
        return value + 1 * 2 + 3;
    }
    
    /*public void javaTest () {

        testClass _c = new testClass();
        _c.t();

    }

    public class testClass {

        public void t () {

            System.out.println("testClass.t method." + Test.this.z);

            testClass2 _c = new testClass2();
            _c.t();


        }

        public class testClass2 {

            public void t () {

                System.out.println("testClass2.t method." + Test.this.z);

            }

        }

    }*/

}