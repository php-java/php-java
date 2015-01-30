
package javatest;

public class JavaTest {

    long z = -22222222222222222L;
    static int c = 100;
    static String b = "Hello World";

    public static void main (String[] args) {

        String x = "String";

        // new instance
        JavaTest _a = new JavaTest();

        // test call
        _a.javaTest();


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
/*
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

        double t2 = 111;
        t2 *= 1;
        t2 = ~1;
        t2 -= 1;
        t2 += 1;
        t2 = 1;

        boolean _b = false;
        _b = true && true;
        _b = true && false;
        _b = true || true;
        _b = true || false;*/

        try {

            for (int i = 0; i < JavaTest.c; i++) {

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


                    System.out.println("Test:" + JavaTest.b + "/" + x + "*****" + i + "/" + b);

                }

                if (i == 10) {

                    throw new NullPointerException();

                }

            }

        } catch (NullPointerException e) {

            System.out.println("ぬるぷっぷー");

        }

    }

    public static String test (int n, String m, int l, int i, int v, int k) {

        int j = 1;

        for (; j <= 10; j++) {

            j++;

        }

        return "Java emulate by php " + n + "/" + m + "/" + l + "/" + i + "/" + v + "/" + k + "/" + j;

    }

    public void javaTest () {

        testClass _c = new testClass();
        _c.t();

    }

    public class testClass {

        public void t () {

            System.out.println("testClass.t method." + JavaTest.this.z);

            testClass2 _c = new testClass2();
            _c.t();


        }

        public class testClass2 {

            public void t () {

                System.out.println("testClass2.t method." + JavaTest.this.z);

            }

        }

    }

}