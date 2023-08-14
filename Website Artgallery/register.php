<?php
session_start();
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
if(isset($_POST['submit'])){
    $id = $_SESSION['user']['id'];
    $namemus = $_POST['namemus'];
    $adres= $_POST['adres'];
    $number = $_POST['number'];
    $infomus = $_POST['infomus'];
    $id_author = $_SESSION['user']['id'];
    $update_p_id = $_POST['update_p_id'];

    mysqli_query($connect, "DELETE FROM `reg_info` WHERE id_author = '$id_author'");
    mysqli_query($connect, "INSERT INTO `reg_info` (`id`, `id_author`, `namemus`, `adres`, `number`, `infomus`)
    VALUES (NULL, '$id', '$namemus', '$adres', '$number', '$infomus')"
    );

    $_SESSION['message'] = 'register complete';
    header('Location: ../register.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ger.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<main>
    <div class="container">
        <div class="uploud__form">
            <?php
            $id = $_SESSION['user']['id'];
            $select_products = mysqli_query($connect, "SELECT * FROM reg_info WHERE id_author = '$id'");
            if(mysqli_num_rows($select_products) > 0){
            while($musinf = mysqli_fetch_assoc($select_products)){
            ?>
            <form class="form" method="post" action="" enctype="multipart/form-data">
                <h2 class="form__title">Заполнить информацию о музее</h2>
                <p>Название музея</p><br/>
                <input type="hidden" name="update_p_id" value="<?php echo $musinf['id']; ?>">
                <textarea name="namemus"  maxlength="150" placeholder="Название музея" required><?php echo $musinf['namemus']; ?></textarea>
                <p>Адрес<br/><input type="text" name="adres" placeholder="Адрес музея" maxlength="150" value="<?php echo $musinf['adres']; ?>" required title="Имя может содержать только буквы."></p>
                <p>Телефонный номер<br/><input type="text" name="number" placeholder="Телефонный номер" maxlength="11" value="<?php echo $musinf['number']; ?>" required title="Введите корректный телефонный номер"></p>
                <p>Информация о музее</p><br/>
                <textarea name="infomus" placeholder="Описание" maxlength="150" required><?php echo $musinf['infomus']; ?></textarea><br/>
                <button class="send" type="submit" name="submit">Сохранить</button>
                <a class="send" href="gallery.php">Назад</a>
            </form>
                <?php
                }
            }
            ?>
        </div>
    </div>
    </main>
</body>
</html>