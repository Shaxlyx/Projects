<?php
    session_start();
    require_once 'connect.php';

    $connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );

    $id = $_SESSION['user']['id'];
    $namemus = $_POST['namemus'];
    $adres= $_POST['adres'];
    $number = $_POST['number'];
    $infomus = $_POST['infomus'];

    mysqli_query($connect, "INSERT INTO `reg_info` (`id`, `id_author`, `namemus`, `adres`, `number`, `infomus`) 
    VALUES (NULL, '$id', '$namemus', '$adres', '$number', '$infomus')"
    );

    $_SESSION['message'] = 'register complete';
    header('Location: ../register.php');


//    $reg_name  = mysqli_query($connect, "SELECT * FROM reg_info");
//    $regn=mysqli_fetch_array($reg_name);
//    echo $regn['namemus'];