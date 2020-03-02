<?php

require_once 'connect.php';

if(isset($_POST['btn']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['age']) && !empty($_POST['color']) && !empty($_POST['user_id'])) {
    $query = $conn->prepare('UPDATE `user` SET `fname`=?,`lname`=?,`age`=?,`ulubiony_kolor`=? WHERE id=?');
    $query-> bind_param(
        'ssiii',
        $_POST['fname'],
        $_POST['lname'],
        $_POST['age'],
        $_POST['color'],
        $_POST['user_id']
    );
    $query->execute();

    header('Location: ../');
}else {
    echo "Wypełnij wszystkie pola!";
}