<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funkcje</title>
  </head>
  <body>
    <?php
      function wartosc($a):string {
        if($a < 0 ){
          return 'ujemna';
        }else if($a == 0) {
          return 'zeroooooOOoOoOo';
        } else {
          return 'dodatnia';
        }
      }

      $x = 5;
      echo wartosc($x),'<br>';

      function getValue():int {
        return 5.99;
      }

      echo getValue(),'<br>';

      $x = 10;

      function wyswietl() {
        echo "Wartość zmiennej \$x wynosi:";
        echo $GLOBALS['x'];

      }
      wyswietl();

      echo "<br>";

      $y = 5;
      function wyswietlY(){
        global $y;
        echo "Wartość zmiennej \$y wynosi: $y";
      }
      wyswietlY();
      echo "<br>";

      function sum(){
        $liczba = 10;
        echo "\$liczba wynosi: $liczba <br>";
        $liczba += 10;

      }

      sum();
      sum();

      echo "<br>";

      function sum1(){
        static $liczba = 10;
        echo "\$liczba wynosi: $liczba <br>";
        $liczba += 10;

      }

      sum1();
      sum1();
      sum1();
      sum1();

      function dodaj($x,$y = 1){
        return $x + $y;
      }

      $z = 10;

      echo dodaj($z),"<br>";
      echo dodaj($z,11  ),"<br>";
      echo dodaj(17,20  ),"<br>";

      echo "<br>";

      function multi(float $x, int $y){
        return $x * $y;
      }

      echo multi(2,3),"<br>";
      echo multi(2.5,3),"<br>";
      echo multi(2,3.5),"<br>";
      echo multi(2,3.75),"<br>";

     ?>
  </body>
</html>
