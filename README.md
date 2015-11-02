# PHPJava
PHPJavaは、コンパイルされたJavaクラスをPHP上でエミュレートするためのプロジェクトです。
JavaクラスはもちろんのことJARにも対応しています。（現在作業中）

# どういう仕組みなの？
コンパイルされたJavaクラスのバイトコードを理解し、PHPで扱えるようにします。
MethodInvokerインタフェースより、Javaのメソッドを呼び出すことを可能とします。

例:
```php
<?php
$javaClass = new JavaClass('test.class');
$javaClass->getMethodInvoker()->main(array(999, 888));
```

上記のようにして、 `test.class` のmainメソッドを呼び出すことが可能となります。
(mainメソッドの引数はString[]を取るため、配列型を渡しています。)

PHPJavaでは、呼び出すメソッドが静的、あるいは動的を区別しません。
これは、PHPで簡易的にJavaのメソッドを呼び出すためです。
ただし、Javaのメンバにおける静的及び動的の扱いは異なります。

