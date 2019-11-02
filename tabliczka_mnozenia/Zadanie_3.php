<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie_1</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <form method="post">
      <label for="numer">Podaj n</label>
      <input type="number" name="numer" id="numer">
      <input type="submit" name="submit">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        if(!empty($_POST['numer'])){
          $n = $_POST['numer'];
          echo "<table>";
          $i = 1;
          $sum = 0;
          while($i <= $n){
            echo "<tr>";
            for($j = 1; $j <= $n; $j++){
              if($j === $i){
                echo "<td class='red'>", $j*$i, "</td>";
                $sum += $i * $j;
              }else {
                echo "<td>", $j*$i, "</td>";
              }
            }
            echo "</tr>";
            $i++;
          }
          echo "</table>";
          echo "</br> Suma: ",$sum;
        }
        else {
          print "Wpisz n!";
        }
      }
     ?>
  </body>
</html>
