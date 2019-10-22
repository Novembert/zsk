<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tytuł</title>
    <style>
      table {
        border-collapse: collapse;
      }

      table td {
        border: 1px solid black;
        padding: 3px 7px;
        text-align: center;
      }

      td.red {
        background-color: red;
      }
    </style>
  </head>
  <body>
    <table>
    <?php
      $n = 10;
      $i = 1;
      $j = 1;
      do {
        echo "<tr>";
        $j=1;
        do{
          if($i==$j){
            echo "<td class='red'>",$i*$j,"</td>";
          }
          else{
          echo "<td>",$i*$j,"</td>";
          }
          $j++;
        }while($j <= $n);
        $i++;
        echo "</tr>";
      }
      while( $i <= $n)
     ?>
     </table>
  </body>
</html>
