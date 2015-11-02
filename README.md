# PHPJava
PHPJavaは、コンパイルされたJavaクラスをPHP上でエミュレートするためのプロジェクトです。
JavaクラスはもちろんのことJARにも対応しています。（現在実装中）
PHPJavaを使うことにより、Javaのモジュールを活用した拡張性の高いシステムを構築することを可能とします。

# どういう仕組みなの？
コンパイルされたJavaクラスのバイトコードを理解し、PHPで高速に扱えるようにします。

例:
```php
<?php
$javaClass = new JavaClass('test.class');
$javaClass->getMethodInvoker()->main(array(999, 888));
```

上記のようにして、 `test.class` のmainメソッドを呼び出すことが可能となります。
(mainメソッドの引数はString[]を取るため、配列型を渡しています。)

また、PHPは動的型付けのため、PHPJavaではJavaへの引数においても厳密に比較しません。
したがって、Javaへ引数を渡す際には暗黙の型変換が行われます。

PHPJavaでは、呼び出すメソッドが静的、あるいは動的かを区別しません。
これは、PHPで簡易的にJavaのメソッドを呼び出すためです。
ただし、Javaのメンバにおける静的及び動的の扱いは異なります。
(ニーモニックについてはこちら: https://en.wikipedia.org/wiki/Java_bytecode_instruction_listings)

# Javaにおけるスレッドの扱いについて
Javaにおけるスレッドの扱いをPHPJavaで表現するには、pthreads(http://php.net/manual/ja/book.pthreads.php) の導入を必要とします。

# TODO

- JARへの対応
- 全ニーモニックへの対応
- アノテーションへの対応
