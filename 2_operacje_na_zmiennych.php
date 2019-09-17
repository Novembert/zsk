<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $potega= 2**10;

    echo $potega,'<hr>';

    //operatory bitowe: and $, or |, not ~, xor ^, >>, <<
    $x = 0b1010;
    echo $x.'<br>';
    $x = $x >> 1; //101
    echo $x.'<br>';
    $x = $x << 2; //10100
    echo $x.'<br>';

    $a = 1;
    $b = 1.0;

    if($a == $b) {
      echo('Identyczne');
    }else {
      echo('Różni się');
    }

    echo('<br>');

    if($a === $b) { //sprawdzanie typu danych i wartosci
      echo('Identyczne');
    }else {
      echo('Różni się');
    }
    echo('<br>');
    echo(gettype($a).'<br>');
    echo(gettype($b).'<br>');

    // potrojny operator porownania

    $x = 1;
    $y = 2;
    $wynik = $x <=> $y;

    echo $wynik.'<br>';

    $x = 4;
    $y = 2;
    $wynik = $x <=> $y;

    echo $wynik.'<br>';

    $x = 2;
    $y = 2;
    $wynik = $x <=> $y;

    echo $wynik.'<hr>';

    //////////////////// zadanko

    $x = 2;
    echo $x++; // 2     x=3
    echo ++$x; // 4     x=4
    echo $x; //   4     x=4
    $y = $x++;//        x=5
    echo $y; //   4
    $y = ++$x;//        x=6
    echo $y;//    6
    echo ++$y;//  7
    echo '<hr >';

    //////////////////// koniec

    $text1 = '4ssd';
    $text2 = 'lechtekst';
    $text3 = '7';
    $num = 15;
    $j = -1;
    $c = 100;

    // operatory rzutowania

    $x = (int)$text1;
    echo $x.'<br>';
    $x = (bool)$j;
    echo $x.'<br>';
    $c = (unset)$c;
    echo $c.'<br>';
    echo gettype($c).'<br>';

    $l = (float)$num;
    echo $l.'<br>';
    echo gettype($l).'<br>';

    //rozmiar integera
    echo PHP_INT_SIZE.'<br';

    $w;

    // echo gettype($w).'<br>'; FATAL ERROR!!!!!

    ?>
  </body>
</html>
