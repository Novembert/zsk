<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wiek</title>
    <style>
      label {
        display: block;
      }
      input {
        display: block;
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <?php
      if(isset($_POST['submit2'])) {
        $n = $_POST['ileN'];
        $najmniejszy = $_POST["wiek0"];
        $najwiekszy = $_POST["wiek0"];
        $suma = 0;
        for ($i=0; $i < $n; $i++) {
          if($_POST["wiek$i"] > $najwiekszy){
            $najwiekszy = $_POST["wiek$i"];
          }
          if($_POST["wiek$i"] < $najmniejszy){
            $najmniejszy = $_POST["wiek$i"];
          }
          $suma += $_POST["wiek$i"];
        }
        $srednia = $suma / $n;
    ?>
      <ul>
        <li>
          Najstarszy: <?php echo $najwiekszy?>
        </li>
        <li>
          Najmlodszy: <?php echo $najmniejszy?>
        </li>
        <li>Średnia wieku: <?php echo $srednia?></li>
      </ul>
    <?php
      }else if(isset($_POST['submit1'])){
    ?>
    <form method="post">
      <?php
        $n = $_POST['ileN'];
        for ($i=0; $i < $n; $i++) {
          echo "<label for='wiek".$i."'>Wiek $i";
          echo "<input type='number' name='wiek".$i."'>";
        }
        echo "<input type='hidden' name='ileN' value='".$n."'>";
      ?>
      <input type="submit" name="submit2">;
    </form>
    <?php
  } else {
     ?>
     <form method="post">
       <label for="ileN">Ile osób?</label>
       <input type="number" name="ileN">
       <input type="submit" name="submit1">
     </form>
   <?php } ?>
  </body>
</html>
