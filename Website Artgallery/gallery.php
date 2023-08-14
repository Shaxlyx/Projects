<?php
session_start();
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
?>
<?php
if(isset($_POST['update_product'])){

    $update_p_id = $_POST['update_p_id'];
    $update_picture = $_POST['update_picture'];
    $update_avtor = $_POST['update_avtor'];
    $update_direct = $_POST['update_direct'];
    $update_genre = $_POST['update_genre'];
    $update_techn = $_POST['update_techn'];
    $update_date = $_POST['update_date'];
    $update_message = $_POST['update_message'];
    $update_image = "../uploades/".$_FILES['update_image']['name'];

    mysqli_query($connect, "UPDATE `image_table` SET imagePath = '$update_image', picture = '$update_picture', avtor = '$update_avtor', direct = '$update_direct', genre = '$update_genre', techn = '$update_techn', date = '$update_date', message = '$update_message' WHERE id = '$update_p_id'");




    header('location:gallery.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=1330, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <div class="container">
            <div class="header__menu">
                    <div class="topnav" id="myTopnav">
                        <a href="register.php">Заполнить информации о музее</a>
                    </div>
            </div>
    </div>
</header>
<main>

    <section class="gallerySection">
        <div class="container">
           <div class="uploud__form">
                <form class="form" method="post" action="vendor/fileForm.php" enctype="multipart/form-data">
                    <h2 class="form__title">Добавление картины</h2>
                    <p>Название картины<br/><input type="text" name="picture" placeholder="Название картины" maxlength="150" required title="Имя может содержать только буквы."></p>
                    <p>Автор картины<br/><input type="text" name="avtor" placeholder="Автор картины" maxlength="150" required title="Имя может содержать только буквы."></p>
                    <p>Стиль живописи<br/></p><select name="direct">
                        <option disabled selected>Выберите стиль</option>
                        <?php
                        $dir  = mysqli_query($connect, "SELECT * FROM direction");
                        while($bab=mysqli_fetch_array($dir))
                        {
                            echo "<option>";
                            echo $bab['name'];
                            echo "</option>";
                        }
                        ?>
                    </select>
                    <p>Жанр живописи<br/></p><select name="genre">
                        <option disabled selected>Выберите жанр</option>
                        <option value="Портрет">Портрет</option>
                        <option value="Пейзаж">Пейзаж</option>
                        <option value="Марина">Марина</option>
                        <option value="Исторический">Исторический</option>
                        <option value="Батальный">Батальный</option>
                        <option value="Анималистика">Анималистика</option>
                        <option value="Бытовой">Бытовой</option>
                        <option value="Натюрморт">Натюрморт</option>
                        <option value="Архитектурный">Архитектурный</option>
                        <option value="Жанр Ню">Жанр Ню</option>
                    </select>
                    <p>Техника написания<br/></p><select name="techn">
                        <option disabled selected>Выберите технику</option>
                        <option value="Масляная">Масляная</option>
                        <option value="Акриловая">Акриловая</option>
                        <option value="Акварель">Акварель</option>
                        <option value="Темпера">Темпера</option>
                        <option value="Гуашь">Гуашь</option>
                        <option value="Тушь">Тушь</option>
                        <option value="Пастель">Пастель</option>
                        <option value="Энкаустика">Энкаустика</option>
                        <option value="Аэрография">Аэрография</option>
                        <option value="Смешанная">Смешанная</option>
                    </select>
                    <p>Год создания<br/><input type="number" name="date" required placeholder="Год создания" minlength="3" maxlength="4" max="2022" pattern="Введите корректную дату" title="Введите корректную дату"></p>
                    <p>Описание</p><br/>
                    <textarea name="message" placeholder="Описание" maxlength="150" required></textarea><br/>
                    <input class="send1" type="file" name="file" accept="image/x-png, image/jpeg" required><br>
                    <button class="send" type="submit" name="submit" value="Загрузить">Загрузить</button>
                </form>
           </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
            <div class="container">
                <div class="wrap">
                    <div class="informBlock">
                        <?php
                        require_once 'vendor/connect.php';

                        mysqli_report(MYSQLI_REPORT_ERROR);
                        $id = $_SESSION['user']['id'];
                        $res  = mysqli_query($connect, "SELECT * FROM image_table WHERE id_author = '$id' ");


                        $classImg = "class = 'gallery'";

                        while($stroka=mysqli_fetch_array($res))
                        {
                            echo "<div class='caif'>"."<a>";
                            echo "<div class='otstyp'>";
                            echo "<img ".$classImg." id='myImg' onclick='showImage(this)' src='".$stroka['imagePath']."'/>";
                            echo '<div class="main__text">'.'<h5>'.$stroka['picture'].'</h5>'.'<p>'.$stroka['avtor'].'</p>'.'<a class="necaif" href="gallery.php?update='.$stroka['id'].'">Изменить</button>'.'</div>';// выводим данные
                            echo "</div>"."</a>"."</div>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
        <section class="edit-product-form">

            <?php
            if(isset($_GET['update'])){
                $update_id = $_GET['update'];
                $update_query = mysqli_query($connect, "SELECT * FROM `image_table` WHERE id = '$update_id'") or die('query failed');
                if(mysqli_num_rows($update_query) > 0){
                    while($fetch_update = mysqli_fetch_assoc($update_query)){
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h1>Редактирование</h1>
                            <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
                            <input type="text" name="update_picture" value="<?php echo $fetch_update['picture']; ?>" class="box" required placeholder="Изменить Название">
                            <input type="text" name="update_avtor" min="0" value="<?php echo $fetch_update['avtor']; ?>" class="box" required placeholder="Изменить Автора">
                            <select name="update_direct" class="box" required>
                                <option selected><?php echo $fetch_update['direct']; ?></option>
                                <?php
                                $dir  = mysqli_query($connect, "SELECT * FROM direction");
                                while($bab=mysqli_fetch_array($dir))
                                {
                                    echo "<option>";
                                    echo $bab['name'];
                                    echo "</option>";
                                }
                                ?>
                            </select>
                            <select name="update_genre" class="box" required>
                                <option selected><?php echo $fetch_update['genre']; ?></option>
                                <option value="Портрет">Портрет</option>
                                <option value="Пейзаж">Пейзаж</option>
                                <option value="Марина">Марина</option>
                                <option value="Исторический">Исторический</option>
                                <option value="Батальный">Батальный</option>
                                <option value="Анималистика">Анималистика</option>
                                <option value="Бытовой">Бытовой</option>
                                <option value="Натюрморт">Натюрморт</option>
                                <option value="Архитектурный">Архитектурный</option>
                                <option value="Жанр Ню">Жанр Ню</option>
                            </select>
                            <select name="update_techn" class="box" required>
                                <option selected><?php echo $fetch_update['techn']; ?></option>
                                <option value="Масляная">Масляная</option>
                                <option value="Акриловая">Акриловая</option>
                                <option value="Акварель">Акварель</option>
                                <option value="Темпера">Темпера</option>
                                <option value="Гуашь">Гуашь</option>
                                <option value="Тушь">Тушь</option>
                                <option value="Пастель">Пастель</option>
                                <option value="Энкаустика">Энкаустика</option>
                                <option value="Аэрография">Аэрография</option>
                                <option value="Смешанная">Смешанная</option>
                            </select>
                            <input type="number" name="update_date" value="<?php echo $fetch_update['date']; ?>" class="box" required placeholder="Год создания" minlength="3" maxlength="4" max="2022" pattern="[0-9+]+" title="Введите корректную дату">
                            <textarea name="update_message" placeholder="Описание" maxlength="150" required class="box"><?php echo $fetch_update['message']; ?></textarea>
                            <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png" required>
                            <input type="submit" value="Изменить" name="update_product" class="btn">
                            <input type="reset" value="Закрыть" id="close-update" class="option-btn">
                        </form>
                        <?php
                    }
                }
            }else{
                echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
            }
            ?>

        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div class="containerPhotosBtn">

            </div>
        </div>


    </section>
    <script>
        $(document).ready(function(){
            $('#search').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                    $.ajax({
                        url:"src.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#list').fadeIn();
                            $('#list').html(data);
                        }
                    });
                }
            });
            $(document).on('click', 'li', function(){
                $('#search').val($(this).text());
                $('#list').fadeOut();
            });
        });

    </script>
    <script>
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById('img01');

        function showImage(imgElement) {
            var src = imgElement.getAttribute("src");
            modal.style.display = "block";
            modalImg.src = src;
        }

        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
        <script src="js/admin_script.js"></script>
</main>
</body>
</html>