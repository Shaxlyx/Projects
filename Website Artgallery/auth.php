<?php
//session_start();
//$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
//if (!$connect) {
//    die('error');
//}
//$number = $_POST['number'];
//$password = $_POST['password'];
//
//
//$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `number` = '$number' AND `password` = '$password'");
//$user = $result->fetch_assoc();
//if(count($user) == 0){
//    echo '<p>"Неправильно введены данные"</p>';
//    exit();
//}
//$_SESSION['user'] = [
//    "id" => $user['id'],
//    "firstName" => $user['firstName'],
//    "secondName" => $user['secondName'],
//    "number" => $user['number'],
//];
//if ($number == '12345' && $password == 12345)
//{
//    $_SESSION['admin'] = true;
//    $script = '../admin_page.php';
//}
//else
//    $script = '../gallery.php';
//header("Location: $script");
//$connect->close();
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
        <form action="vendor/signin.php" method="post" class="form">
            <h1 class="form__title">Вход</h1>
            <div class="form__group">
                <input minlength="5" type="text" name="number" placeholder="Логин"  class="form__input">
            </div>
            <div class="form__group">
                <input minlength="5" type="password" name="password" placeholder="Пароль"  class="form__input">
            </div>
            <button type="submit" class="form__button" name="go_login">Войти</button>
        </form>

</body>
</html>