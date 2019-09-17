<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $_name = 'Janusz';
      $name1 = "Grażyna";

      // konkatenacja ale przecinek dziala inaczej niz kropka, sprawdzic w domu
      echo "$_name".$name1.'<br>';
      echo "$_name",$name1.'<hr>';

      $prawda = true;

      // typ integer
      $calkowita = 10;
      $hex = 0xA;
      $oct = 010;
      $bin = 0b1010;

      echo $bin,$hex.'<hr>';

      // skladnia heredoc
      $imie= "Kasia";
      $nazwisko = "Nowak";
      $text = <<< ETYKIETA
      Twoje imię: $imie<br>
      Twoje nazwisko: $nazwisko<hr>
ETYKIETA;

      echo $text;


      echo <<< E
      Imię: $name1<hr>
E;

// skladnia nowdoc
      echo <<< 'E'
Imię: $name1<hr>
E;

      // wyświetlanie nazw zmiennych
      echo "Nazwa zmiennej: \$imie, wartość zmiennej: $imie";
    ?>
  </body>
</html>
