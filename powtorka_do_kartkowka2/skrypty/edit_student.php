<?php 

if(isset($_POST['btn_edit_student'])&&!empty($_POST['new_name'])&&!empty($_POST['new_birthday'])&&!empty($_POST['new_city'])&&!empty($_POST['new_surname'])&&!empty($_POST['student_id'])){
  require_once("./connect.php");
  $edit_student_query = $conn->prepare('
    UPDATE `student` 
    SET `name`=?, `surname`=?, `birthday`=?, `city_id`=?
    WHERE `id`=?
  ');
  $edit_student_query->bind_param('sssii',
    $_POST['new_name'],
    $_POST['new_surname'],
    $_POST['new_birthday'],
    $_POST['new_city'],
    $_POST['student_id']
  );
  $edit_student_query->execute();
  echo "dupa";
  header('Location: ../');
}else {
  echo "dupa2";
  header('Location: ../');
}