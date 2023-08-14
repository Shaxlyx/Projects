<?php
    session_start();
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
if (!$connect) {
    die('error');
}
    $number = $_POST['number'];
    $password = $_POST['password'];


    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `number` = '$number' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo '<p>"Неправильно введены данные"</p>';
        exit();
    }
    if (empty($number)){
        $user_number = "Введите нормальный логин";
    }
    if (empty($password)){
        $user_password = "Введите нормальный пароль";
    }
    $_SESSION['user'] = [
        "id" => $user['id'],
        "firstName" => $user['firstName'],
        "secondName" => $user['secondName'],
        "number" => $user['number'],
    ];
    if ($number == '12345' && $password == 12345)
    {
        $_SESSION['admin'] = true;
        $script = '../admin_page.php';
    }
    else
        $script = '../gallery.php';
    header("Location: $script");
    $connect->close();

//    header("Location: ../gallery.php");



