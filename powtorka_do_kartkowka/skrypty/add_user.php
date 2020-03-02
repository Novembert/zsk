<?php

require_once 'connect.php';

if(isset($_POST['btn']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['age']) && !empty($_POST['color'])) {
    $query = $conn->prepare("INSERT INTO `user`( `fname`, `lname`, `age`,`ulubiony_kolor`) VALUES (?,?,?,?)");
    $query-> bind_param(
        'ssii',
        $_POST['fname'],
        $_POST['lname'],
        $_POST['age'],
        $_POST['color']
    );
    $query->execute();

    header('Location: ../');
}else {
    echo "Wypełnij wszystkie pola!";
}