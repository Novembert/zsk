<?php

if(isset($_POST['btn_edit_city'])&&!empty($_POST['city_name'])&&!empty($_POST['city_id'])){
  require_once("./connect.php");
  $query3 = $conn->prepare('UPDATE `city` SET `city`=? WHERE id=?');
  $query3->bind_param('si',$_POST['city_name'],$_POST['city_id']);
  $query3->execute();
  header('Location: ../');
}else {
  header('Location: ../');
}