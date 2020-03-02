<?php

require_once 'connect.php';

if(!empty($_GET['user_id'])) {
  $query=$conn->prepare('DELETE FROM `user` WHERE `user`.`id` = ?');
  $query->bind_param('i',$_GET['user_id']);
  $query->execute();

  header('Location: ../');
}
