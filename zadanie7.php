<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie</title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="ile">
      <input type="submit" name="submit1">
    </form>
    <?php
      $n;

      function obliczDane($y) {
        $najmniejsza = $_POST['ile0'];
        $najwieksza = $_POST['ile0'];
        $suma = 0;
        for($j = 0; $j < $y; $j++){
          if($_POST["ile$j"] < $najmniejsza)
            $najmniejsza = $_POST["ile$j"];
          if($_POST["ile$j"] > $najwieksza)
            $najwieksza = $_POST["ile$j"];
          $suma += $_POST["ile$j"];
        }
        echo "Najmlodsza osoba ma $najmniejsza lat<br>Najstarsza osoba ma $najwieksza lat<br>Średnia wieku: ",$suma/$y;
      }

      if(isset($_POST['submit1']) || isset($_POST['submit2']))
      {
        if(!empty($_POST['ile']))
        {
          $GLOBALS['n'] = $_POST['ile'];

          ob_clean();
          echo "<form method='post'>";
          for($i = 0; $i < $n; $i++){
            echo "Wiek ", $i+1, "<br>";
            echo "<input type='number' name='ile$i'>";
            echo "<br>";
            echo "<br>";
          }
          echo "<br><input type='submit' name='submit2'>";
          echo "</form>";

        }
        if(isset($_POST['submit2'])) {
          obliczDane($GLOBALS['n']);
        }
      }


     ?>
  </body>
</html>
