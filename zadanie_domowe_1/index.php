<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularz 2</title>
    <style media="screen">
      table {
        border-collapse: collapse;
      }

      td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <?php
    include_once('./form.php');
    if(isset($_POST['submit']) && !empty($_POST['imie']) && !empty($_POST['numer']) && !empty($_POST['komentarz'])) {
      $imie = $_POST['imie'];
      $imie = trim($imie);
      $imie = ucfirst($imie);
      $numer = $_POST['numer'];
      $komentarz = $_POST['komentarz'];
     ?>
     <table>
       <tr>
         <th>Imię</th>
         <th>Numier</th>
         <th>Komentarz</th>
       </tr>
       <tr>
         <td><?=$imie?></td>
         <td><?=$numer?></td>
         <td><?=$komentarz?></td>
       </tr>
     </table>
   <?php } ?>
  </body>
</html>
