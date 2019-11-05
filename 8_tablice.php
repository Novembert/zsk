<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tablice</title>
  </head>
  <body>
    <?php
      $colors = array('Red','Green',"Blue");
      $colors[3] = 'Magenta';

      function showArray($tab) {
        for($i = 0; $i < count($tab);$i++){
          $elem = $i + 1;
          echo "Element $elem: $tab[$i] </br>";
        }
        echo "<hr>";
      }

      function showArrayAssoc($tab){
        foreach ($tab as $key => $value){
          echo "$key: $value </br>";
        }
      }

      showArray($colors);

      foreach ($colors as $key => $value){
        $elem = $key + 1;
        echo "Element $elem: $value </br>";
      }
      echo "<hr>";

      $data = array(
        'imie' => "Janusz",
        'nazwisko' => "Kowalski",
        'wiek' => 30
      );

      showArrayAssoc($data);
      echo "<hr>";

      $student = array(
        array('Katarzyna','Nowak',30),
        array('Katarzyna','Lancmańska',80),
        array('Katarzyna','Pawlacz',18)
      );

      function showArrayNew($a) {
        for($i = 0; $i < count($a); $i++){
          for($j = 0; $j < count($a[$i]);$j++){
            echo $a[$i][$j]," ";
          }
          echo "</br>";
        }
      }

      function showArrayNew1($a) {
        foreach ($a as $value) {
          foreach ($value as $x) {
            echo $x," ";
          }
          echo "<br>";
        }
      }

      showArrayNew($student);
      echo "<hr>";
      showArrayNew1($student);
      echo "<hr>";

      $tab = array(
        array(
          array('Jan',"Nowak"),
          array("Seba","kowal"),
        ),
        array(
          array("Romka","Buchert"),
          array("Agata","Jackowiak"),
        ),
        array(
          array("Filip","Perz"),
          array("Adrian","Kokot"),
        ),
      );

      foreach ($tab as $value) {
        foreach ($value as $x) {
          foreach ($x as $y) {
            echo $y," ";
          }
          echo "<br>";
        }
        echo "<br>";
      }


      $tab = array(10,2,5,75,-4,100);
      function wyswietl($tab){
        foreach ($tab as $value) {
          echo $value, " ";
        };
        echo "<br>";
      }

      wyswietl($tab);

      sort($tab);
      wyswietl($tab);

      rsort($tab);
      wyswietl($tab);

      // zadanko

      $text = ['a','B','u','c','D'];

      function f1($text){
        for ($i=0; $i < count($text) ; $i++) {
          // code...
          strtolower($text[$i]);
        }
        return $text;
      }

      $text = f1($text);
      echo wyswietl($text);
     ?>
  </body>
</html>
